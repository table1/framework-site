---
id: b78b92db-e9f9-4ccb-9b6f-db32fd96b0a3
blueprint: doc_function
title: 'Stage Files for Commit'
name: git_add
description: |-

  Add file contents to the staging area.
usage: 'git_add(files = ".")'
value: |-

  Invisibly returns TRUE on success
source_file: R/git_hooks.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: files
    description: 'Character vector of file paths to stage, or "." for all (default)'
    position: 1
examples:
  -
    type: example
    code: |-
      git_add()              # Stage all changes
      git_add("README.md")   # Stage specific file
      git_add(c("R/foo.R", "R/bar.R"))
    is_dontrun: true
    position: 2
category: afbdb383-dead-4998-b2ee-f6e3f0c63115
---
