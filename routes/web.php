<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Statamic\Facades\Entry;

// Documentation index
Route::statamic('/docs', 'docs.index', [
    'title' => 'Documentation',
    'layout' => 'layout'
]);

// Blog index
Route::statamic('/blog', 'blog.index', [
    'title' => 'Blog',
    'layout' => 'layout'
]);

// Search index JSON endpoint
Route::get('/search-index.json', function () {
    $functions = Entry::query()
        ->where('collection', 'doc_functions')
        ->where('published', true)
        ->get()
        ->map(function ($entry) {
            $description = $entry->get('description') ?? '';
            // Truncate description to ~100 chars
            if (strlen($description) > 100) {
                $description = substr($description, 0, 100) . '...';
            }

            $usage = $entry->get('usage') ?? '';
            $usage = trim($usage);
            $signature = '';
            $signatureArgs = '';

            if ($usage !== '') {
                $cleanUsage = preg_replace('/\s+/', ' ', $usage);
                $cleanUsage = preg_replace('/\(\s+/', '(', $cleanUsage);
                $cleanUsage = preg_replace('/\s+\)/', ')', $cleanUsage);
                $cleanUsage = preg_replace('/\s+\(/', '(', $cleanUsage);
                $cleanUsage = preg_replace('/,\s+/', ', ', $cleanUsage);
                $cleanUsage = trim($cleanUsage);
                $signature = $cleanUsage;

                $name = $entry->get('name');
                if ($name && str_starts_with($cleanUsage, $name)) {
                    $signatureArgs = ltrim(substr($cleanUsage, strlen($name)));
                    $signatureArgs = $signatureArgs !== '' ? $signatureArgs : '()';
                } else {
                    $signatureArgs = $cleanUsage !== '' ? " {$cleanUsage}" : '()';
                }
            }

            return [
                'type' => 'function',
                'name' => $entry->get('name'),
                'title' => $entry->get('title') ?? $entry->get('name'),
                'url' => $entry->url(),
                'usage' => $usage,
                'signature' => $signature,
                'signature_args' => $signatureArgs,
                'description' => trim($description),
                'category' => $entry->get('category')?->title ?? null,
                'is_common' => (bool) $entry->get('is_common'),
                'keywords' => $entry->get('keywords'),
            ];
        });

    $guideSections = [
        'getting_started' => 'Getting Started',
        'features' => 'Features',
    ];

    $guides = Entry::query()
        ->where('collection', 'doc_guides')
        ->whereIn('section', array_keys($guideSections))
        ->where('published', true)
        ->get()
        ->map(function ($entry) use ($guideSections) {
            $description = trim($entry->get('description') ?? '');
            if ($description !== '') {
                $description = Str::limit($description, 140);
            }

            $section = $entry->get('section');

            return [
                'type' => 'guide',
                'title' => $entry->get('title'),
                'url' => $entry->url(),
                'description' => $description,
                'section' => $section,
                'section_label' => $guideSections[$section] ?? null,
            ];
        });

    return response()->json([
        'functions' => $functions,
        'guides' => $guides,
    ]);
})->name('search-index');
