---
id: edb2f77c-7af0-45af-aab9-08a237129d31
blueprint: doc_function
title: 'Push to Remote'
name: git_push
description: |-

  Push commits to the remote repository.
usage: 'git_push(remote = "origin", branch = NULL)'
value: |-

  Invisibly returns TRUE on success
source_file: R/git_hooks.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: remote
    description: 'Remote name (default: "origin")'
    position: 1
  -
    type: parameter
    name: branch
    description: 'Branch name (default: current branch)'
    position: 2
examples:
  -
    type: example
    code: |-
      git_push()
      git_push(remote = "origin", branch = "main")
    is_dontrun: true
    position: 2
category: b5ae3ab8-9430-4da3-b0a6-b1b475d85c6f
---
