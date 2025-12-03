# CLAUDE.md

This file provides guidance to Claude Code when working with code in this repository.

## Project Overview

**framework-site** is the official documentation and marketing website for the [Framework R package](https://github.com/erikwestlund/framework). Built with **Statamic 5** on **Laravel 12**, it serves as a flat-file CMS that imports API documentation from the Framework package's `docs.db` SQLite database.

**Key Characteristics:**
- Flat-file first architecture (content stored as YAML + Markdown)
- Documentation imported from Framework package via artisan command
- Static-capable deployment ready
- Dark mode support with Tailwind CSS v4

## Tech Stack

| Layer | Technology |
|-------|------------|
| Framework | Laravel 12 |
| CMS | Statamic 5 |
| PHP | 8.2+ |
| Database | SQLite (for user auth; content is flat-file) |
| CSS | Tailwind CSS 4 + @tailwindcss/typography |
| JS | Alpine.js 3 (CDN) |
| Bundler | Vite 7 |
| Templates | Antlers (Statamic's templating language) |

## Common Commands

### Development Server

```bash
# Start Laravel dev server
php artisan serve

# Start Vite for hot-reloading CSS/JS
npm run dev

# Run both together (in separate terminals)
php artisan serve & npm run dev
```

### Documentation Import

```bash
# Import Framework docs from docs.db (auto-detects location)
php artisan framework:import-docs

# Import from specific path
php artisan framework:import-docs /path/to/docs.db

# Fresh import (deletes existing entries first)
php artisan framework:import-docs --fresh
```

The import command looks for `docs.db` in these locations:
1. `storage/docs.db`
2. `../framework/inst/gui/docs.db`
3. `../framework/gui-dev/public/docs.db`

### Build & Deploy

```bash
# Build production assets
npm run build

# Clear Statamic cache
php artisan statamic:stache:clear

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

### Statamic CLI

```bash
# Statamic-specific commands use 'please' shortcut
php please make:collection name
php please make:blueprint name
php please make:fieldset name

# List all Statamic routes
php please routes:list
```

## Directory Structure

```
framework-site/
├── app/Console/Commands/
│   └── ImportFrameworkDocs.php    # Core import command
├── content/
│   └── collections/
│       ├── doc_functions/         # 89 function entries (.md)
│       ├── doc_categories/        # 13 category entries (.md)
│       └── pages.yaml
├── resources/
│   ├── blueprints/collections/    # Field definitions
│   │   ├── doc_functions/doc_function.yaml
│   │   └── doc_categories/doc_category.yaml
│   ├── views/
│   │   ├── layout.antlers.html    # Base layout
│   │   ├── home.antlers.html      # Homepage
│   │   ├── docs/
│   │   │   ├── index.antlers.html # Docs index
│   │   │   ├── show.antlers.html  # Function detail
│   │   │   └── category.antlers.html
│   │   └── partials/
│   │       ├── header.antlers.html
│   │       └── docs-nav.antlers.html
│   ├── css/site.css               # Tailwind entry point
│   └── js/site.js                 # JS entry point
├── storage/docs.db                # Imported docs database
└── public/build/                  # Vite output
```

## Collections

### doc_functions
- **Route:** `/docs/{slug}`
- **Template:** `docs/show.antlers.html`
- **Content:** Imported function documentation with parameters, examples, sections, aliases, and see-also references

### doc_categories
- **Route:** `/docs/{slug}` (category view)
- **Template:** `docs/category.antlers.html`
- **Content:** Category groupings for functions (Configuration, Data Management, etc.)

### pages
- **Route:** Variable per entry
- **Template:** `default.antlers.html`
- **Content:** Static marketing pages

## Blueprint Fields (doc_function)

The function blueprint includes these key fields:
- **Basic:** title, name, category, is_common, is_exported
- **Content:** description, details, note, usage, value
- **Parameters:** Replicator with name, description, position
- **Examples:** Replicator with code, is_dontrun, position
- **Sections:** Replicator with section_title, content, subsections
- **Related:** aliases (list), seealso (replicator with reference, link_type, url)
- **Meta:** source_file, keywords

## Import Workflow

The `ImportFrameworkDocs` command (`app/Console/Commands/ImportFrameworkDocs.php`) handles the data flow:

```
Framework Package                    framework-site
──────────────────                   ────────────────
R/docs_export.R
       │
       ▼
docs.db (SQLite)  ──────────────►  php artisan framework:import-docs
   • categories                              │
   • functions                               ▼
   • parameters                    content/collections/
   • examples                         • doc_categories/*.md
   • sections                         • doc_functions/*.md
   • aliases
   • seealso
```

**Import transforms:**
- SQLite rows → YAML frontmatter + Markdown files
- Category IDs → Statamic entry UUIDs
- Function slugs → URL-safe slugs

## Antlers Templating

Statamic uses Antlers syntax (not Blade). Key patterns:

```antlers
{{# Loop through collection #}}
{{ collection:doc_functions }}
    <a href="{{ url }}">{{ title }}</a>
{{ /collection:doc_functions }}

{{# Conditionals #}}
{{ if is_common }}
    <span>Common</span>
{{ /if }}

{{# Render markdown #}}
{{ description | markdown }}

{{# Partials #}}
{{ partial:header }}
{{ partial:docs-nav }}

{{# Variable access #}}
{{ title }}
{{ category:title }}
```

## Styling Guidelines

### Tailwind CSS v4

The site uses Tailwind v4 with the new `@plugin` syntax:

```css
/* resources/css/site.css */
@import "tailwindcss";
@plugin "@tailwindcss/typography";
@source "../views";
@source "../../content";
```

### Design Tokens
- **Colors:** Slate palette (light), Sky accents for links/buttons
- **Dark mode:** Uses `dark:` variant with class-based toggling
- **Typography:** `prose prose-slate dark:prose-invert` for content

### Responsive Breakpoints
- Mobile: Stacked layout, hidden sidebar
- `lg:` Desktop: 3-column layout with fixed sidebar

## Development Notes

### Adding New Pages

1. Create entry in `content/collections/pages/`:
   ```yaml
   ---
   title: New Page
   template: default
   ---
   Page content here...
   ```

2. Or create via Statamic CP at `/cp`

### Modifying Function Display

Edit `resources/views/docs/show.antlers.html` for individual function pages.

### Adding New Categories

Run the import command after updating the Framework package's `inst/docs-export/categories.yml`.

### Regenerating Documentation

After changes to Framework package's R documentation:

```bash
# In framework repo
R -e "devtools::load_all(); docs_export()"

# In framework-site repo
php artisan framework:import-docs --fresh
```

## Environment Configuration

Key `.env` settings:

```env
APP_NAME="Framework Docs"
APP_ENV=local
APP_DEBUG=true

# Database (for user auth only)
DB_CONNECTION=sqlite

# Statamic Features (production may differ)
STATAMIC_PRO_ENABLED=false
STATAMIC_REVISIONS_ENABLED=false
STATAMIC_API_ENABLED=false
STATAMIC_GIT_ENABLED=false
STATAMIC_STATIC_CACHING_ENABLED=false
```

## Testing

```bash
# Run PHP tests
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php
```

## Static Site Generation (Future)

The site is designed for potential static generation:
- All content is flat-file (git-trackable)
- No per-request dynamic logic
- Import can run in CI/CD pipeline
- Ready for static hosting with SPA fallback

## Related Repositories

- **[framework](../framework)** - The R package this site documents
- Source of truth for `docs.db` and all API documentation

## Key Files Reference

| File | Purpose |
|------|---------|
| `app/Console/Commands/ImportFrameworkDocs.php` | Documentation import logic |
| `resources/blueprints/collections/doc_functions/doc_function.yaml` | Function field definitions |
| `resources/views/docs/show.antlers.html` | Function detail template |
| `resources/views/layout.antlers.html` | Base layout |
| `resources/css/site.css` | Tailwind configuration |
| `content/collections/doc_functions/` | Imported function docs |
| `storage/docs.db` | SQLite copy of Framework docs |
