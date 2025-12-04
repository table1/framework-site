---
id: 38c3e2c8-90eb-4e31-aebf-161c9753fae3
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
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
