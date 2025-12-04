---
id: f023ba37-be9e-4987-84df-e0a248ba9b2a
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
category: cacb883e-9a21-4374-8f1b-5399fc490f0f
---
