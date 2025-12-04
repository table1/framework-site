---
id: 5ea2b73f-9d2f-45ed-898e-270b6f3a7d2e
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
category: 80765b72-8ebf-4c19-9760-5876e5973c1e
---
