---
id: 67d9b6bd-c14e-4bdd-8721-a4af1996c2e7
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
category: b5ae3ab8-9430-4da3-b0a6-b1b475d85c6f
---
