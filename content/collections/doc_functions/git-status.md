---
id: 0fa1bbc0-4215-4931-ae19-df6f28891faa
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
category: 3007585c-499c-4b6d-a55a-6661cb2a18f4
---
