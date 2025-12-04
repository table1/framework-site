---
id: 08294a94-f68a-429c-996b-59b9bb5ca64e
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
category: ff16a347-5648-4e33-8abd-bee402853878
---
