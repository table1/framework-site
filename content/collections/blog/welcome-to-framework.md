---
id: 110eb8e9-0945-4e6e-baf4-a2563fe45580
blueprint: post
title: 'Welcome to Framework'
author: 'Framework Team'
excerpt: 'Introducing Framework, a data management and project scaffolding system for reproducible data analysis workflows in R.'
date: '2024-12-04'
tags:
  - announcement
  - getting-started
---
We're excited to introduce **Framework**: a comprehensive data management and project scaffolding system designed for reproducible data analysis workflows in R.

## Why Framework?

Data science projects often start simple but quickly become complex. Files get scattered, data transformations become hard to track, and reproducibility suffers. Framework addresses these challenges with a "convention over configuration" approach.

## Key Features

### Project Scaffolding

Create well-structured projects with a single command:

```r
library(framework)
project_create("my-analysis")
```

Framework sets up directories for inputs, outputs, functions, notebooks, and more — following best practices out of the box.

### Smart Data Management

Framework's data catalog tracks your data files with integrity verification:

```r
# Register data in your catalog
data_add("survey", "inputs/raw/survey_2024.csv")

# Load with automatic validation
df <- data_read("survey")
```

### Intelligent Caching

Cache expensive computations and skip them when inputs haven't changed:

```r
results <- cache_remember("model_results", {
    # This only runs if not cached
    train_expensive_model(data)
})
```

### Visual GUI

Manage your projects through a beautiful web interface:

```r
gui()
```

## Getting Started

Install Framework from GitHub:

```r
# install.packages("devtools")
devtools::install_github("table1/framework")
```

Then create your first project:

```r
library(framework)
project_create("my-project")
```

Check out our [documentation](/docs) for detailed guides and examples.

## What's Next

We're actively developing Framework and would love your feedback. Visit our [GitHub repository](https://github.com/table1/framework) to:

- Report issues
- Suggest features
- Contribute code

Welcome to reproducible data science with Framework!
