---
id: c9836295-c281-493f-9752-583e8400af2d
blueprint: doc_function
title: 'Enable renv for this project'
name: renv_enable
description: |-

  Initializes renv integration for the current Framework project. This:
  - Creates `.framework_renv_enabled` marker file
  - Initializes renv if not already initialized
  - Syncs packages from settings.yml to renv.lock
  - Updates .gitignore to exclude renv cache
usage: 'renv_enable(sync = TRUE)'
value: |-

  Invisibly returns TRUE on success
source_file: R/renv.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: sync
    description: 'Logical; if TRUE (default), sync packages from settings.yml'
    position: 1
examples:
  -
    type: example
    code: renv_enable()
    is_dontrun: true
    position: 2
category: 171a0b3f-4d9a-429d-b38a-59c8882aee66
---
