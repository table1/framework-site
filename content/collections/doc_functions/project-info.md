---
id: d3250ee7-305b-4e53-8ee8-2a9f62f4eaf6
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
category: 23e39ab1-5e54-43c8-ba60-467fc1dc22c3
---
