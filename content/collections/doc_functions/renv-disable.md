---
id: 02f820a8-2bb0-4b40-ac1e-a2c1b3dbafcd
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
category: ff16a347-5648-4e33-8abd-bee402853878
---
