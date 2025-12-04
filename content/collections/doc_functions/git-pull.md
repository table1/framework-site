---
id: ea7ad2f8-48a8-4246-8131-f97bdf0f3cb8
blueprint: doc_function
title: 'Pull from Remote'
name: git_pull
description: |-

  Fetch and integrate changes from the remote repository.
usage: 'git_pull(remote = "origin", branch = NULL)'
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
      git_pull()
      git_pull(remote = "origin", branch = "main")
    is_dontrun: true
    position: 2
category: 3007585c-499c-4b6d-a55a-6661cb2a18f4
---
