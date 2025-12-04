---
id: 628abd49-5714-43ff-82bc-e044ce789fb4
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
category: b5ae3ab8-9430-4da3-b0a6-b1b475d85c6f
---
