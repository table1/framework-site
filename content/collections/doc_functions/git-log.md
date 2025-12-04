---
id: 13c112d0-fee3-4654-94bb-fa68e1e298b9
blueprint: doc_function
title: 'Show Commit Log'
name: git_log
description: |-

  Show recent commit history.
usage: 'git_log(n = 10, oneline = TRUE)'
value: |-

  Invisibly returns the log output as a character vector
source_file: R/git_hooks.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: 'n'
    description: 'Number of commits to show (default: 10)'
    position: 1
  -
    type: parameter
    name: oneline
    description: 'Logical; if TRUE, show condensed one-line format (default: TRUE)'
    position: 2
examples:
  -
    type: example
    code: |-
      git_log()
      git_log(n = 5)
      git_log(oneline = FALSE)  # Full format
    is_dontrun: true
    position: 2
category: b5ae3ab8-9430-4da3-b0a6-b1b475d85c6f
---
