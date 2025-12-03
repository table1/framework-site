---
id: fd66f742-24d5-4cf4-b136-0ee1854e421c
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
category: 171a0b3f-4d9a-429d-b38a-59c8882aee66
---
