---
id: quick-start
title: Quick Start
section: getting_started
position: 2
description: 'Create your first Framework project in minutes'
---
## Create a New Project

Start by loading Framework and creating a new project:

```r
library(framework)
init()
```

This launches an interactive wizard that guides you through project setup.

## Project Setup Wizard

The wizard will ask you for:

1. **Project name** - A descriptive name for your project
2. **Project type** - Choose from:
   - `project` - Standard data analysis project
   - `course` - Academic course with slides and assignments
   - `presentation` - Single presentation or report
3. **Directory location** - Where to create the project
4. **Git initialization** - Whether to set up version control
5. **renv integration** - Whether to use renv for package management

## Project Structure

After initialization, your project will have this structure:

```
my-project/
├── config.yml          # Project configuration
├── scaffold.R          # Environment setup script
├── functions/          # Custom R functions
├── notebooks/          # Analysis notebooks
├── scripts/            # R scripts
├── inputs/             # Data inputs
│   ├── raw/           # Original data files
│   ├── intermediate/  # Processed data
│   ├── final/         # Analysis-ready data
│   └── reference/     # Reference data
└── outputs/            # Analysis outputs
    ├── private/        # Internal outputs
    └── public/         # Shareable outputs
```

## Your First Workflow

### 1. Set Up Your Environment

Open `scaffold.R` and run it to load your project environment:

```r
source("scaffold.R")
```

This loads packages, sets up paths, and sources your custom functions.

### 2. Create a Notebook

Create your first analysis notebook:

```r
make_notebook("exploratory-analysis")
```

This creates a new Quarto notebook in your `notebooks/` directory.

### 3. Load Some Data

Add data to your project's data catalog in `config.yml`:

```yaml
data:
  inputs.raw.sales:
    path: inputs/raw/sales.csv
    type: csv
```

Then load it in your notebook:

```r
sales <- data_read("inputs.raw.sales")
```

### 4. Cache Expensive Operations

Use caching to avoid re-running slow computations:

```r
processed_data <- cache_remember("processed_sales", {
  # Expensive data processing here
  sales %>%
    mutate(date = as.Date(date)) %>%
    filter(amount > 0)
})
```

## Next Steps

- Learn about [data management](/docs/data-management) concepts
- Explore [configuration options](/docs/configuration)
- Understand [project types](/docs/project-types) in detail
