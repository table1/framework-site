---
id: 192d5046-3066-4ef1-ae0c-a625f8105105
blueprint: doc_function
title: 'Clear R environment'
name: env_clear
description: |-

  Cleans up the R environment by removing objects, closing plots, detaching packages, and running garbage collection. Does not clear the console.
usage: 'env_clear(keep = character())'
value: |-

  Invisibly returns NULL
source_file: R/env.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: keep
    description: 'Character vector of object names to keep (default: empty)'
    position: 1
examples:
  -
    type: example
    code: |-
      # Clean everything
      env_clear()
      # Keep specific objects
      env_clear(keep = c("config", "data"))
    is_dontrun: true
    position: 2
category: d1d943e0-ea7c-4207-824b-aeaefb4cc4e3
---
