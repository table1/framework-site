---
id: configuration
title: Configuration
section: getting_started
position: 3
description: 'Understanding Framework configuration files and settings'
---
## Overview

Framework uses a YAML-based configuration system with three levels:

1. **Project config** (`config.yml`) - Project-specific settings
2. **Global config** (`~/.config/framework/`) - User-wide defaults
3. **Package defaults** - Built-in fallbacks

## Project Configuration

Each project has a `config.yml` file at its root:

```yaml
default:
  project_type: project

  # Directory structure
  directories:
    notebooks: notebooks
    scripts: scripts
    functions: functions
    inputs_raw: inputs/raw
    inputs_final: inputs/final
    cache: outputs/private/cache

  # Packages to load
  packages:
    - dplyr
    - ggplot2
    - tidyr

  # Random seed for reproducibility
  seed: 20241016
```

## The config() Helper

Access configuration values using dot notation:

```r
# Get a directory path
config("notebooks")           # → "notebooks"
config("cache")               # → "outputs/private/cache"

# Get nested values
config("directories.cache")   # → "outputs/private/cache"

# With defaults
config("missing.key", default = "fallback")
```

## Global Configuration

User-wide settings are stored in `~/.config/framework/`:

- `config.yml` - Default preferences
- `projects.yml` - Registry of your projects
- `settings-catalog.yml` - Available settings schema

### Setting Global Defaults

Use the GUI or edit `~/.config/framework/config.yml`:

```yaml
FW_AUTHOR_NAME: "Your Name"
FW_AUTHOR_EMAIL: "you@example.com"
FW_SEED: "20241016"
FW_DEFAULT_FORMAT: "quarto"
```

## Environment Variables

Sensitive values should go in `.env` (gitignored):

```bash
# .env
DB_HOST=localhost
DB_USER=analyst
DB_PASSWORD=secret
```

Access them in R:

```r
Sys.getenv("DB_HOST")
```

## Data Catalog

Define your data sources in config:

```yaml
data:
  inputs.raw.customers:
    path: inputs/raw/customers.csv
    type: csv

  inputs.final.analysis_ready:
    path: inputs/final/analysis_ready.rds
    type: rds
```

Load with:

```r
customers <- data_read("inputs.raw.customers")
```

## Database Connections

Configure database connections:

```yaml
connections:
  main_db:
    driver: postgres
    host: ${DB_HOST}
    port: 5432
    dbname: analytics
    user: ${DB_USER}
    password: ${DB_PASSWORD}
```

## Next Steps

- Learn about [data management](/docs/data-management)
- Explore [caching](/docs/caching) strategies
- Set up [database connections](/docs/connections)
