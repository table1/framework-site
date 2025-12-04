---
id: d983f435-19d5-4841-b246-bde20bc888f0
blueprint: doc_function
title: 'Check if renv is enabled for this project'
name: renv_enabled
description: |-

  Determines whether renv integration is active by checking for the `.framework_renv_enabled` marker file in the project root.
usage: renv_enabled()
value: |-

  Logical indicating whether renv is enabled
source_file: R/renv.R
is_exported: true
is_common: false
examples:
  -
    type: example
    code: |-
      if (renv_enabled()) {
        message("Using renv for package management")
      }
    is_dontrun: false
    position: 1
category: 4e3d8e4d-7d2e-4b09-8cd7-1c4b4797d52d
---
