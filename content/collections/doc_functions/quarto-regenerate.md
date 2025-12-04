---
id: d7783665-567d-4024-9796-ec187dcd7584
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
category: b517b2b4-400e-45b0-b341-974f612409b2
---
