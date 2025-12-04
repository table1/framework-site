---
id: 15949ce7-b799-4c5d-9554-78b7dd6a7b42
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
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
