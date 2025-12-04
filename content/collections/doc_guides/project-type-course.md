---
id: project-type-course
title: Course Type
section: project_types
position: 22
description: 'Structure for academic courses and teaching'
---
## Overview

The **Course** type is designed for educators creating academic courses. It provides organized directories for slides, assignments, and course materials.

## Directory Structure

```
my-course/
├── config.yml           # Course configuration
├── scaffold.R           # Environment setup
├── framework.db         # Metadata database
│
├── functions/           # Shared functions
│   └── grading.R
│
├── slides/              # Lecture presentations
│   ├── week-01/
│   │   ├── lecture.qmd
│   │   └── assets/
│   └── week-02/
│       └── lecture.qmd
│
├── assignments/         # Student assignments
│   ├── assignment-01/
│   │   ├── instructions.qmd
│   │   └── solution.qmd
│   └── assignment-02/
│
├── modules/             # Course modules
│   ├── module-01/
│   └── module-02/
│
├── course_docs/         # Course documentation
│   ├── syllabus.qmd
│   └── schedule.qmd
│
└── outputs/
    ├── private/         # Answer keys, grades
    └── public/          # Published materials
```

## Creating Course Content

### Slides

Create lecture slides with Reveal.js (via Quarto):

```r
make_notebook("intro-to-r", subdir = "slides/week-01", format = "revealjs")
```

### Assignments

Create assignment notebooks:

```r
make_notebook("assignment-01", subdir = "assignments")
```

### Course Documents

Create syllabi and schedules:

```r
make_notebook("syllabus", subdir = "course_docs")
```

## Configuration

Example `config.yml` for a course:

```yaml
default:
  project_type: course

  directories:
    slides: slides
    assignments: assignments
    modules: modules
    course_docs: course_docs
    functions: functions
    cache: outputs/private/cache

  packages:
    - dplyr
    - ggplot2
    - palmerpenguins  # Example datasets

  # Quarto defaults for slides
  quarto:
    slides:
      format: revealjs
      theme: simple
```

## Organizing Content

### By Week

```
slides/
├── week-01-introduction/
├── week-02-data-types/
├── week-03-data-wrangling/
└── week-04-visualization/
```

### By Module

```
modules/
├── foundations/
│   ├── slides/
│   └── exercises/
├── data-manipulation/
│   ├── slides/
│   └── exercises/
└── visualization/
```

## Teaching Workflow

### 1. Prepare Lectures

Create slides in `slides/`:

```r
make_notebook("data-wrangling", subdir = "slides/week-03")
```

### 2. Create Assignments

Build assignments with instructions and solutions:

```
assignments/assignment-01/
├── instructions.qmd  # Student-facing
└── solution.qmd      # Answer key (private)
```

### 3. Share Materials

Render public materials:

```bash
quarto render slides/ --output-dir outputs/public/slides
```

Keep solutions in `outputs/private/`.

## Best Practices

### Consistent Naming

Use consistent prefixes:
```
week-01-*, week-02-*, ...
assignment-01, assignment-02, ...
module-01-*, module-02-*, ...
```

### Separate Public/Private

- **Public**: Lecture slides, assignment instructions
- **Private**: Solutions, grades, answer keys

### Reusable Functions

Put common code in `functions/`:

```r
# functions/grading.R
calculate_grade <- function(scores, weights) {
  sum(scores * weights) / sum(weights)
}
```

## Next Steps

- Create your first [slides](/docs/make-notebook)
- Learn about [Quarto presentations](https://quarto.org/docs/presentations/)
- Explore [configuration](/docs/configuration) options
