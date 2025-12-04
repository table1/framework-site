---
id: bda9895e-3806-492b-b3f7-1da038eb4789
blueprint: doc_function
title: 'Commit Staged Changes'
name: git_commit
description: |-

  Record changes to the repository with a commit message.
usage: 'git_commit(message, all = FALSE)'
value: |-

  Invisibly returns TRUE on success
source_file: R/git_hooks.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: message
    description: 'Commit message (required)'
    position: 1
  -
    type: parameter
    name: all
    description: 'Logical; if TRUE, automatically stage modified/deleted files (default: FALSE)'
    position: 2
examples:
  -
    type: example
    code: |-
      git_commit("Fix bug in data loading")
      git_commit("Update README", all = TRUE)  # Stage and commit
    is_dontrun: true
    position: 2
category: 2b186ac4-d03b-466a-8735-2753eaeec217
---
