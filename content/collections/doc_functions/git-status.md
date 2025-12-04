---
id: 05bef3f7-30d3-4cbc-9065-2fd1d39fad74
blueprint: doc_function
title: 'Show Git Status'
name: git_status
description: |-

  Display the working tree status from the R console.
usage: 'git_status(short = FALSE)'
value: |-

  Invisibly returns the status output as a character vector
source_file: R/git_hooks.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: short
    description: 'Logical; if TRUE, show short format (default: FALSE)'
    position: 1
examples:
  -
    type: example
    code: |-
      git_status()
      git_status(short = TRUE)
    is_dontrun: true
    position: 2
category: 2b186ac4-d03b-466a-8735-2753eaeec217
---
