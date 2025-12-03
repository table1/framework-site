---
id: e4fe88f1-9514-4f72-8750-13b2b1c8416a
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
category: afbdb383-dead-4998-b2ee-f6e3f0c63115
---
