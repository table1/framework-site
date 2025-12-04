---
id: f75cb378-726d-4857-bdcc-8862d125ef3c
blueprint: doc_function
title: 'Disable renv for this project'
name: renv_disable
description: |-

  Deactivates renv integration while preserving renv.lock for future use. Removes the `.framework_renv_enabled` marker file.
usage: 'renv_disable(keep_renv = TRUE)'
value: |-

  Invisibly returns TRUE on success
source_file: R/renv.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: keep_renv
    description: 'Logical; if TRUE (default), keep renv.lock and renv/ directory'
    position: 1
examples:
  -
    type: example
    code: renv_disable()
    is_dontrun: true
    position: 2
category: 4e3d8e4d-7d2e-4b09-8cd7-1c4b4797d52d
---
