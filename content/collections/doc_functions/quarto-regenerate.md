---
id: d3587a85-0aae-4909-b544-8c6d1325f3ee
blueprint: doc_function
title: 'Regenerate Quarto Configurations'
name: quarto_regenerate
description: |-

  Regenerates all `_quarto.yml` files in a project. **WARNING: This will overwrite any manual edits.** Should only be called when user explicitly requests regeneration.
usage: 'quarto_regenerate(project_path, backup = TRUE)'
value: |-

  List with success status, backed up files, and regenerated files
source_file: R/quarto_generate.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: project_path
    description: 'Character. Path to project root'
    position: 1
  -
    type: parameter
    name: backup
    description: 'Logical. If TRUE, backs up existing files before overwriting. Default TRUE.'
    position: 2
category: 861b5e0d-bc2d-4fe0-aec1-2e64ee3db54a
---
