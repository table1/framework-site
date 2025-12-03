---
id: 07ca1737-3d42-411b-aeb1-699a17becbd4
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
category: afbdb383-dead-4998-b2ee-f6e3f0c63115
---
