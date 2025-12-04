---
id: project-type-project
title: Project Type
section: project_types
position: 21
description: 'The standard data analysis project structure'
---
## Overview

The **Project** type is Framework's default and most versatile project structure. It's designed for data analysis, research, and reporting workflows.

## Directory Structure

```
my-project/
├── config.yml           # Project configuration
├── scaffold.R           # Environment setup
├── framework.db         # Metadata database
│
├── functions/           # Custom R functions
│   └── helpers.R
│
├── notebooks/           # Analysis notebooks
│   ├── 01-exploration.qmd
│   └── 02-modeling.qmd
│
├── scripts/             # Automation scripts
│   └── data-pipeline.R
│
├── inputs/              # Data inputs
│   ├── raw/            # Original data
│   ├── intermediate/   # Processed data
│   ├── final/          # Analysis-ready
│   └── reference/      # Lookups, constants
│
└── outputs/             # Generated outputs
    ├── private/        # Internal results
    │   ├── cache/      # Cached computations
    │   ├── scratch/    # Temporary files
    │   └── docs/       # Internal docs
    └── public/         # Shareable outputs
        └── docs/       # Published reports
```

## Workflow

### 1. Set Up Environment

Start each session by running the scaffold:

```r
source("scaffold.R")
```

This loads:
- Required packages
- Project configuration
- Custom functions from `functions/`
- Database connections

### 2. Create Notebooks

Create analysis notebooks:

```r
make_notebook("exploration")
make_notebook("modeling", subdir = "analysis")
```

### 3. Manage Data

Define data in `config.yml`:

```yaml
data:
  inputs.raw.sales:
    path: inputs/raw/sales_2024.csv
    type: csv
```

Load and process:

```r
sales <- data_read("inputs.raw.sales")
```

### 4. Cache Results

Cache expensive computations:

```r
model_results <- cache_remember("sales_model", {
  fit_complex_model(sales)
})
```

### 5. Save Outputs

Save results to the registry:

```r
result_save(
  model_results,
  "quarterly_forecast",
  comment = "Q4 2024 sales forecast"
)
```

## Configuration

Example `config.yml` for a project:

```yaml
default:
  project_type: project

  directories:
    notebooks: notebooks
    scripts: scripts
    functions: functions
    inputs_raw: inputs/raw
    inputs_intermediate: inputs/intermediate
    inputs_final: inputs/final
    cache: outputs/private/cache

  packages:
    - dplyr
    - ggplot2
    - tidyr
    - readr

  seed: 20241016

  data:
    inputs.raw.sales:
      path: inputs/raw/sales.csv
      type: csv
```

## Best Practices

### Organize Notebooks

Number notebooks to indicate order:
```
notebooks/
├── 01-data-import.qmd
├── 02-cleaning.qmd
├── 03-exploration.qmd
├── 04-modeling.qmd
└── 05-reporting.qmd
```

### Use Subdirectories

For complex projects:
```r
make_notebook("eda", subdir = "exploration")
make_notebook("regression", subdir = "modeling")
```

### Separate Raw from Processed

Never modify raw data:
```
inputs/
├── raw/          # NEVER modify
├── intermediate/ # Cleaned versions
└── final/        # Ready for analysis
```

## Next Steps

- Learn about [data management](/docs/data-management)
- Explore [caching](/docs/caching)
- See the [make_notebook](/docs/make-notebook) reference
