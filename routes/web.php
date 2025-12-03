<?php

use Illuminate\Support\Facades\Route;

// Documentation index
Route::statamic('/docs', 'docs.index', [
    'title' => 'Documentation',
    'layout' => 'layout'
]);
