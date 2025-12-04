---
id: aae71341-a4c9-4fa8-8990-64d21f1e8eca
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
category: 2b186ac4-d03b-466a-8735-2753eaeec217
---
