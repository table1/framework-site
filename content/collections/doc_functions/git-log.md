---
id: 71602522-3cde-4d48-98fc-84419d74c049
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
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
