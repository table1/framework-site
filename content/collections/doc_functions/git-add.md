---
id: 6d24356b-692c-457c-8510-f04c52dee1a4
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
category: b5ae3ab8-9430-4da3-b0a6-b1b475d85c6f
---
