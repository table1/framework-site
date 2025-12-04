---
id: project-types
title: Project Types Overview
section: project_types
position: 20
description: 'Understanding the different project types in Framework'
---
## Overview

Framework supports three project types, each optimized for different workflows:

| Type | Best For |
|------|----------|
| **Project** | Data analysis, research, reporting |
| **Course** | Academic courses with lectures and assignments |
| **Presentation** | Single presentations or reports |

## Choosing a Project Type

### Project (Default)

Use for most data analysis work:
- Exploratory data analysis
- Research projects
- Recurring reports
- Data pipelines

**Structure:**
```
my-analysis/
├── config.yml
├── scaffold.R
├── notebooks/       # Analysis notebooks
├── scripts/         # Automation scripts
├── functions/       # Custom functions
├── inputs/          # Data files
└── outputs/         # Results
```

### Course

Use for teaching and academic courses:
- Lecture slides
- Student assignments
- Course materials
- Module organization

**Structure:**
```
my-course/
├── config.yml
├── scaffold.R
├── slides/          # Lecture presentations
├── assignments/     # Student work
├── modules/         # Course modules
├── course_docs/     # Syllabi, guides
└── functions/       # Shared functions
```

### Presentation

Use for focused, single-output work:
- Conference presentations
- Standalone reports
- One-off analyses

**Structure:**
```
my-presentation/
├── config.yml
├── scaffold.R
├── presentation.qmd # Main presentation
├── functions/       # Support functions
└── outputs/         # Generated files
```

## Creating Projects

### Interactive Wizard

```r
library(framework)
init()  # Launches wizard
```

### Programmatic Creation

```r
# Create a standard project
init(
  project_name = "Sales Analysis",
  project_type = "project",
  directory = "~/projects/sales-analysis"
)

# Create a course
init(
  project_name = "Data Science 101",
  project_type = "course",
  directory = "~/teaching/ds101"
)

# Create a presentation
init(
  project_name = "Q4 Report",
  project_type = "presentation",
  directory = "~/presentations/q4-report"
)
```

## Shared Features

All project types include:

- **Configuration** (`config.yml`) - Project settings
- **Scaffolding** (`scaffold.R`) - Environment setup
- **Functions directory** - Custom R functions
- **Outputs directory** - Generated files
- **Git integration** - Version control ready
- **Quarto support** - Modern document rendering

## Next Steps

- Deep dive into [Project type](/docs/project-type-project)
- Explore [Course type](/docs/project-type-course)
- Learn about [Presentation type](/docs/project-type-presentation)
