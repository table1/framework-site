# Framework Documentation Site

The official documentation and marketing website for the [Framework R package](https://github.com/table1/framework).

## Overview

This site is built with **Statamic 5** on **Laravel 12**, using a flat-file CMS architecture. Documentation is imported from the Framework package's `docs.db` SQLite database, which is generated from R/roxygen documentation.

## Tech Stack

- **Framework:** Laravel 12
- **CMS:** Statamic 5 (flat-file)
- **PHP:** 8.2+
- **CSS:** Tailwind CSS 4 + @tailwindcss/typography
- **JS:** Alpine.js 3
- **Syntax Highlighting:** Shiki
- **Bundler:** Vite 7

## Local Development

```bash
# Install dependencies
composer install
npm install

# Start dev servers (run in separate terminals)
php artisan serve
npm run dev
```

The site will be available at `http://localhost:8000` (or via Laravel Herd/Valet).

## Documentation Import

Function documentation is imported from the Framework R package:

```bash
# Import docs (auto-detects docs.db location)
php artisan framework:import-docs

# Import from specific path
php artisan framework:import-docs /path/to/docs.db

# Fresh import (deletes existing entries first)
php artisan framework:import-docs --fresh
```

The command looks for `docs.db` in:
1. `storage/docs.db`
2. `../framework/inst/gui/docs.db`
3. `../framework/gui-dev/public/docs.db`

### Import Flow

```
Framework R Package              framework-site
───────────────────              ──────────────
R/docs_export.R
       │
       ▼
docs.db (SQLite)  ────────►  php artisan framework:import-docs
   • categories                        │
   • functions                         ▼
   • parameters              content/collections/
   • examples                   • doc_categories/*.md
   • sections                   • doc_functions/*.md
   • aliases
   • seealso
```

## Project Structure

```
framework-site/
├── app/Console/Commands/
│   └── ImportFrameworkDocs.php    # Documentation import command
├── content/collections/
│   ├── doc_functions/             # Imported function docs (87 entries)
│   └── doc_categories/            # Category groupings (11 entries)
├── resources/
│   ├── views/
│   │   ├── layout.antlers.html    # Base layout + Shiki config
│   │   ├── home.antlers.html      # Landing page
│   │   ├── docs/
│   │   │   ├── show.antlers.html  # Function detail page
│   │   │   └── category.antlers.html
│   │   └── partials/
│   │       ├── header.antlers.html
│   │       └── docs-nav.antlers.html
│   └── css/site.css               # Tailwind + custom styles
├── storage/docs.db                # SQLite docs database
└── public/build/                  # Vite output
```

## Build & Deploy

```bash
# Build production assets
npm run build

# Clear caches
php artisan statamic:stache:clear
php artisan cache:clear
php artisan view:clear
```

## Related Repositories

- **[framework](https://github.com/table1/framework)** - The R package this site documents
