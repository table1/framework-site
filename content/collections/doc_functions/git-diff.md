---
id: e3b0bb20-3d0d-438b-81e7-094adfa031f3
blueprint: doc_function
title: 'Show Changes (Diff)'
name: git_diff
description: |-

  Show changes between commits, working tree, etc.
usage: 'git_diff(staged = FALSE, file = NULL)'
value: |-

  Invisibly returns the diff output as a character vector
source_file: R/git_hooks.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: staged
    description: 'Logical; if TRUE, show staged changes (default: FALSE shows unstaged)'
    position: 1
  -
    type: parameter
    name: file
    description: 'Optional file path to show diff for specific file'
    position: 2
examples:
  -
    type: example
    code: |-
      git_diff()             # Show unstaged changes
      git_diff(staged = TRUE) # Show staged changes
      git_diff(file = "R/foo.R")
    is_dontrun: true
    position: 2
category: 2b186ac4-d03b-466a-8735-2753eaeec217
---
