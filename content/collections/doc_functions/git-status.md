---
id: c559750e-a7b1-469a-bdd5-2e82bc085733
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
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
