---
id: 9f154167-c256-4e41-bcd6-89d0d08ac065
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
category: 2b186ac4-d03b-466a-8735-2753eaeec217
---
