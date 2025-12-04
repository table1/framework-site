---
id: data-management
title: Data Management
section: core_concepts
position: 10
description: 'Managing data files with the declarative data catalog'
---
## Overview

Framework provides a declarative approach to data management. Instead of hardcoding file paths throughout your code, you define a data catalog in your configuration and reference data by logical names.

## The Data Catalog

Define your data sources in `config.yml`:

```yaml
data:
  inputs.raw.sales:
    path: inputs/raw/sales_2024.csv
    type: csv

  inputs.raw.customers:
    path: inputs/raw/customers.parquet
    type: parquet

  inputs.final.merged:
    path: inputs/final/merged_data.rds
    type: rds
```

## Reading Data

Use `data_read()` to load data by its catalog name:

```r
# Load from catalog
sales <- data_read("inputs.raw.sales")
customers <- data_read("inputs.raw.customers")

# The function automatically:
# - Resolves the path from config
# - Uses the correct reader (read.csv, arrow::read_parquet, etc.)
# - Tracks data lineage
```

## Saving Data

Save data to the catalog with `data_save()`:

```r
# Process and save
merged <- sales %>%
  left_join(customers, by = "customer_id")

data_save(merged, "inputs.final.merged")
```

## Data Info

Get information about a data entry:

```r
data_info("inputs.raw.sales")
# Returns path, type, and metadata
```

## Supported Formats

Framework supports these data formats:

| Type | Extension | Reader |
|------|-----------|--------|
| `csv` | .csv | `readr::read_csv()` |
| `rds` | .rds | `readRDS()` |
| `parquet` | .parquet | `arrow::read_parquet()` |
| `excel` | .xlsx | `readxl::read_excel()` |
| `json` | .json | `jsonlite::read_json()` |

## Data Integrity

Framework automatically tracks data integrity using hashes. When you save data, a hash is computed and stored. On subsequent reads, you can verify the data hasn't been modified.

## Organization Best Practices

### Directory Structure

```
inputs/
├── raw/          # Original, untouched data
├── intermediate/ # Cleaned/transformed data
├── final/        # Analysis-ready datasets
└── reference/    # Lookup tables, constants
```

### Naming Convention

Use dot notation for logical grouping:

```yaml
data:
  # Source.stage.name pattern
  inputs.raw.sales_2024:
    path: inputs/raw/sales_2024.csv

  inputs.intermediate.sales_cleaned:
    path: inputs/intermediate/sales_cleaned.rds

  inputs.final.sales_ready:
    path: inputs/final/sales_ready.rds
```

## Next Steps

- Learn about [caching](/docs/caching) expensive operations
- Set up [database connections](/docs/connections)
- Explore the [data_read](/docs/data-read) function reference
