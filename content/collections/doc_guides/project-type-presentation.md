---
id: project-type-presentation
title: Presentation Type
section: project_types
position: 23
description: 'Streamlined structure for presentations and reports'
---
## Overview

The **Presentation** type is a minimal structure for focused, single-output work like conference presentations, standalone reports, or one-off analyses.

## Directory Structure

```
my-presentation/
├── config.yml           # Configuration
├── scaffold.R           # Environment setup
├── presentation.qmd     # Main document
├── framework.db         # Metadata database
│
├── functions/           # Support functions
│   └── helpers.R
│
├── inputs/              # Data inputs
│   └── data.csv
│
└── outputs/             # Generated files
    ├── private/
    │   └── cache/
    └── public/
        └── presentation.html
```

## Creating a Presentation

```r
init(
  project_name = "Quarterly Report",
  project_type = "presentation"
)
```

This creates a streamlined structure with a main `presentation.qmd` file.

## Configuration

Example `config.yml`:

```yaml
default:
  project_type: presentation

  directories:
    functions: functions
    cache: outputs/private/cache

  packages:
    - dplyr
    - ggplot2
    - gt

  # Quarto output settings
  quarto:
    format: revealjs
    theme: dark
```

## Workflow

### 1. Set Up

```r
source("scaffold.R")
```

### 2. Edit Presentation

Work directly in `presentation.qmd`:

```yaml
---
title: "Q4 Sales Analysis"
author: "Your Name"
format: revealjs
---

## Overview

Key findings from Q4 sales data.

## Revenue Growth

```{r}
sales_plot
```
```

### 3. Render

```bash
quarto render presentation.qmd
```

Or in R:

```r
quarto::quarto_render("presentation.qmd")
```

## Output Formats

Change the format in the YAML header:

### Reveal.js Slides
```yaml
format: revealjs
```

### HTML Document
```yaml
format: html
```

### PDF Report
```yaml
format: pdf
```

### Word Document
```yaml
format: docx
```

## Best Practices

### Keep It Focused

The presentation type is for single deliverables. For multi-document projects, use the standard **Project** type.

### Use Functions

Even in minimal projects, extract reusable code:

```r
# functions/plots.R
create_revenue_chart <- function(data) {
  ggplot(data, aes(x = month, y = revenue)) +
    geom_col(fill = "steelblue") +
    theme_minimal()
}
```

### Cache Computations

Speed up rendering:

```r
# In presentation.qmd
summary_stats <- cache_remember("summary", {
  expensive_calculations()
})
```

## When to Use

**Good for:**
- Conference talks
- Committee presentations
- Executive summaries
- One-time reports
- Quick analyses

**Consider Project type for:**
- Ongoing analyses
- Multiple deliverables
- Complex data pipelines
- Collaborative work

## Next Steps

- Learn about [Quarto formats](https://quarto.org/docs/output-formats/)
- Explore [caching](/docs/caching) for faster renders
- See [configuration](/docs/configuration) options
