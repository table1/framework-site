---
id: c8541b75-87e9-4f17-b193-82c6d894713c
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
category: 6564d14d-7fe9-4bea-97a2-6329bf4eaad6
---
