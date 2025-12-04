<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Statamic\Facades\Entry;
use Statamic\Facades\Collection;
use SQLite3;

class ImportFrameworkDocs extends Command
{
    protected $signature = 'framework:import-docs
                            {path? : Path to docs.db file}
                            {--fresh : Delete existing entries before importing}';

    protected $description = 'Import Framework R package documentation from docs.db';

    protected ?SQLite3 $db = null;
    protected array $categoryMap = [];

    public function handle(): int
    {
        $dbPath = $this->argument('path') ?? $this->findDocsDb();

        if (!$dbPath || !file_exists($dbPath)) {
            $this->error("docs.db not found. Please provide path or copy to storage/docs.db");
            return Command::FAILURE;
        }

        $this->info("Importing from: {$dbPath}");

        try {
            $this->db = new SQLite3($dbPath, SQLITE3_OPEN_READONLY);
        } catch (\Exception $e) {
            $this->error("Failed to open database: " . $e->getMessage());
            return Command::FAILURE;
        }

        if ($this->option('fresh')) {
            $this->info('Deleting existing entries...');
            $this->deleteExistingEntries();
        }

        $this->info('Importing categories...');
        $this->importCategories();

        $this->info('Importing functions...');
        $this->importFunctions();

        $this->db->close();

        $this->newLine();
        $this->info('Import complete!');
        $this->table(
            ['Collection', 'Entries'],
            [
                ['doc_categories', count($this->categoryMap)],
                ['doc_functions', Entry::whereCollection('doc_functions')->count()],
            ]
        );

        return Command::SUCCESS;
    }

    protected function findDocsDb(): ?string
    {
        $possiblePaths = [
            storage_path('docs.db'),
            base_path('../framework/inst/gui/docs.db'),
            base_path('../framework/gui-dev/public/docs.db'),
        ];

        foreach ($possiblePaths as $path) {
            if (file_exists($path)) {
                return $path;
            }
        }

        return null;
    }

    protected function deleteExistingEntries(): void
    {
        Entry::whereCollection('doc_functions')->each(fn($entry) => $entry->delete());
        Entry::whereCollection('doc_categories')->each(fn($entry) => $entry->delete());
    }

    protected function importCategories(): void
    {
        $results = $this->db->query('SELECT * FROM categories ORDER BY position');

        $bar = $this->output->createProgressBar();
        $bar->start();

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $slug = Str::slug($row['name']);

            $entry = Entry::make()
                ->collection('doc_categories')
                ->slug($slug)
                ->data([
                    'title' => $this->formatCategoryTitle($row['name']),
                    'name' => $row['name'],
                    'description' => $row['description'],
                    'position' => $row['position'] ?? 0,
                ]);

            $entry->save();

            $this->categoryMap[$row['id']] = $entry->id();
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
    }

    protected function importFunctions(): void
    {
        $results = $this->db->query('SELECT * FROM functions WHERE is_exported = 1 ORDER BY name');

        $count = $this->db->querySingle('SELECT COUNT(*) FROM functions WHERE is_exported = 1');
        $bar = $this->output->createProgressBar($count);
        $bar->start();

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $this->importFunction($row);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
    }

    protected function importFunction(array $func): void
    {
        $slug = Str::slug($func['name']);

        $data = [
            'title' => $func['title'] ?: $func['name'],
            'name' => $func['name'],
            'description' => $func['description'],
            'details' => $func['details'],
            'usage' => $func['usage'],
            'value' => $func['value'],
            'note' => $func['note'],
            'source_file' => $func['source_file'],
            'keywords' => $func['keywords'],
            'is_exported' => (bool) $func['is_exported'],
            'is_common' => (bool) $func['is_common'],
            'parameters' => $this->getParameters($func['id']),
            'examples' => $this->getExamples($func['id']),
            'sections' => $this->getSections($func['id']),
            'aliases' => $this->getFunctionAliases($func['id']),
            'seealso' => $this->getSeeAlso($func['id']),
        ];

        // Link to category if exists
        if ($func['category_id'] && isset($this->categoryMap[$func['category_id']])) {
            $data['category'] = $this->categoryMap[$func['category_id']];
        }

        $entry = Entry::make()
            ->collection('doc_functions')
            ->slug($slug)
            ->data($data);

        $entry->save();
    }

    protected function getParameters(int $functionId): array
    {
        $params = [];
        $results = $this->db->query(
            "SELECT * FROM parameters WHERE function_id = {$functionId} ORDER BY position"
        );

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $params[] = [
                'type' => 'parameter',
                'name' => $row['name'],
                'description' => $row['description'],
                'position' => $row['position'] ?? 0,
            ];
        }

        return $params;
    }

    protected function getExamples(int $functionId): array
    {
        $examples = [];
        $results = $this->db->query(
            "SELECT * FROM examples WHERE function_id = {$functionId} ORDER BY position"
        );

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $examples[] = [
                'type' => 'example',
                'code' => $this->formatExampleCode($row['code']),
                'is_dontrun' => (bool) $row['is_dontrun'],
                'position' => $row['position'] ?? 0,
            ];
        }

        return $examples;
    }

    /**
     * Format example code to add breathing room before comments
     */
    protected function formatExampleCode(string $code): string
    {
        $lines = explode("\n", $code);
        $formatted = [];
        $prevLineWasCode = false;

        foreach ($lines as $line) {
            $trimmed = trim($line);
            $isComment = str_starts_with($trimmed, '#');
            $isEmpty = $trimmed === '';

            // Add blank line before comment if previous line was code
            if ($isComment && $prevLineWasCode) {
                $formatted[] = '';
            }

            $formatted[] = $line;

            // Track if this line was code (not empty, not comment)
            $prevLineWasCode = !$isEmpty && !$isComment;
        }

        return implode("\n", $formatted);
    }

    protected function getSections(int $functionId): array
    {
        $sections = [];
        $results = $this->db->query(
            "SELECT * FROM sections WHERE function_id = {$functionId} ORDER BY position"
        );

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $sections[] = [
                'type' => 'section',
                'section_title' => $row['title'],
                'content' => $row['content'],
                'position' => $row['position'] ?? 0,
                'subsections' => $this->getSubsections($functionId, $row['id']),
            ];
        }

        return $sections;
    }

    protected function getSubsections(int $functionId, int $sectionId): array
    {
        $subsections = [];
        $results = $this->db->query(
            "SELECT * FROM subsections WHERE function_id = {$functionId} AND section_id = {$sectionId} ORDER BY position"
        );

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $subsections[] = [
                'type' => 'subsection',
                'subsection_title' => $row['title'],
                'content' => $row['content'],
                'position' => $row['position'] ?? 0,
            ];
        }

        return $subsections;
    }

    protected function getFunctionAliases(int $functionId): array
    {
        $aliases = [];
        $results = $this->db->query(
            "SELECT alias FROM aliases WHERE function_id = {$functionId}"
        );

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $aliases[] = $row['alias'];
        }

        return $aliases;
    }

    protected function getSeeAlso(int $functionId): array
    {
        $seealso = [];
        $results = $this->db->query(
            "SELECT * FROM seealso WHERE function_id = {$functionId}"
        );

        while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
            $seealso[] = [
                'type' => 'reference',
                'reference' => $row['reference'],
                'link_type' => $row['link_type'] ?? 'function',
                'url' => $row['url'],
            ];
        }

        return $seealso;
    }

    protected function formatCategoryTitle(string $name): string
    {
        // Convert snake_case to Title Case
        $title = Str::title(str_replace('_', ' ', $name));

        // Preserve acronyms
        $acronyms = ['Ai' => 'AI', 'Api' => 'API', 'Db' => 'DB', 'Sql' => 'SQL', 'Csv' => 'CSV'];
        return str_replace(array_keys($acronyms), array_values($acronyms), $title);
    }
}
