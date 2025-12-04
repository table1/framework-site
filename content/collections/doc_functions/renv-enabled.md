---
id: 84f7ad78-7252-4c8c-a124-fe522a0bad4e
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
category: ff16a347-5648-4e33-8abd-bee402853878
---
