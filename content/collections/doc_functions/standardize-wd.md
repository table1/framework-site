---
id: 018efd7e-dbec-4a80-8207-e9e2ea318226
blueprint: doc_function
title: 'Standardize Working Directory for Framework Projects'
name: standardize_wd
description: |-

  This function helps standardize the working directory when working with framework projects, especially useful in Quarto/RMarkdown documents that may be rendered from subdirectories.
details: |-

  The function looks for common framework project indicators:
  - settings.yml or settings.yml file
  - .Rprofile file
  - Being in common subdirectories (scratch, work)

  It sets both the regular working directory and knitr's root.dir option if knitr is available.
usage: 'standardize_wd(project_root = NULL)'
value: |-

  Invisibly returns the standardized project root path.
source_file: R/framework_util.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: project_root
    description: |-
      Character string specifying the project root directory.
      If NULL (default), the function will attempt to find it automatically.
    position: 1
examples:
  -
    type: example
    code: |-
      library(framework)
      standardize_wd()
      scaffold()
    is_dontrun: true
    position: 2
category: a0f48be8-c23b-41cb-a0cd-3b8e8fdf454f
---
