<?php

use Illuminate\Support\Facades\Route;
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
    $entries = Entry::query()
        ->where('collection', 'doc_functions')
        ->where('published', true)
        ->get()
        ->map(function ($entry) {
            $description = $entry->get('description') ?? '';
            // Truncate description to ~100 chars
            if (strlen($description) > 100) {
                $description = substr($description, 0, 100) . '...';
            }
            return [
                'name' => $entry->get('name'),
                'title' => $entry->get('title') ?? $entry->get('name'),
                'url' => $entry->url(),
                'usage' => $entry->get('usage'),
                'description' => trim($description),
                'category' => $entry->get('category')?->title ?? null,
                'keywords' => $entry->get('keywords'),
            ];
        });

    return response()->json($entries);
})->name('search-index');
