---
id: 60b5caf8-fb55-47d0-a15c-fa5aa66e93d1
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
category: 3007585c-499c-4b6d-a55a-6661cb2a18f4
---
