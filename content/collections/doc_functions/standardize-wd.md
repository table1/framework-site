---
id: a0435938-3770-4aa4-a161-1156be623bc3
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
category: d1d943e0-ea7c-4207-824b-aeaefb4cc4e3
---
