---
id: faf51bf0-5219-4e34-8665-44b1ed91ea90
blueprint: doc_function
title: 'Display project structure information'
name: project_info
description: |-

  Shows configured directories and their status (created or pending lazy creation). Useful for understanding the project structure and discovering available paths.
usage: 'project_info(verbose = FALSE)'
value: |-

  A data frame with directory information (invisibly)
source_file: R/outputs.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: verbose
    description: 'If TRUE, shows additional details about each directory'
    position: 1
examples:
  -
    type: example
    code: |-
      # Show project structure
      project_info()
      # Get detailed info
      project_info(verbose = TRUE)
    is_dontrun: true
    position: 2
category: d66ecf3f-69b2-4898-b647-7e8e566a6513
---
