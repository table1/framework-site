---
id: e6f8a4af-34d5-4f42-aa44-55f11c9522fa
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
category: 03dbf8c4-6a04-4747-923a-de1860585213
---
