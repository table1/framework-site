---
id: 79ceff5a-8633-4982-b5ab-478294a65c38
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
category: 80765b72-8ebf-4c19-9760-5876e5973c1e
---
