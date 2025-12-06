<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Markdown Parser Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may define the configuration arrays for each markdown parser.
    | You may use the base CommonMark options as well as any extensions'
    | options here. The available options are in the CommonMark docs.
    |
    | https://statamic.dev/extending/markdown#configuration
    |
    */

    'configs' => [

        'default' => [
            // HeadingPermalink config - adds IDs to h2/h3 for "On this page" navigation
            // Note: We only want IDs on headings (no visible link), but CommonMark
            // requires 'insert' to be 'before' or 'after' for IDs to be generated.
            // The link is hidden via CSS.
            'heading_permalink' => [
                'html_class' => 'heading-permalink sr-only',
                'id_prefix' => '',
                'fragment_prefix' => '',
                'insert' => 'before',
                'min_heading_level' => 2,
                'max_heading_level' => 4,
                'title' => '',
                'symbol' => '',
                'aria_hidden' => true,
            ],
        ],

    ],

];
