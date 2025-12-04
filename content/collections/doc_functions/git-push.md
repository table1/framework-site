---
id: 2b9b38f2-90b9-4966-942d-41a90d9b21d6
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
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
