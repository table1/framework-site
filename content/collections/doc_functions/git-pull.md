---
id: d57c0d1b-a9c3-4a00-911b-4a3550dda76b
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
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
