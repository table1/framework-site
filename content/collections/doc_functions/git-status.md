---
id: d00f806b-ac5e-4a19-8d43-0d5e5040e039
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
category: afbdb383-dead-4998-b2ee-f6e3f0c63115
---
