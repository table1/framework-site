---
id: 8c22781e-686c-4cb2-a89c-990f9a82f637
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
category: 171a0b3f-4d9a-429d-b38a-59c8882aee66
---
