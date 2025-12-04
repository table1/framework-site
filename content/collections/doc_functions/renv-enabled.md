---
id: 97400bb8-bb89-4547-8616-809835a99a7f
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
category: cacb883e-9a21-4374-8f1b-5399fc490f0f
---
