---
id: 61edc13d-1042-4669-878f-ce1e7d6c2d1b
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
category: 80765b72-8ebf-4c19-9760-5876e5973c1e
---
