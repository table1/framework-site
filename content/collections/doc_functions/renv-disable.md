---
id: 45d8836a-6188-4d3f-a298-daefffcba1e4
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
category: cacb883e-9a21-4374-8f1b-5399fc490f0f
---
