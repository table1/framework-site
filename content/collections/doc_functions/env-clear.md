---
id: 70148573-08ae-40f9-8ef3-3b93e009002e
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
category: 6564d14d-7fe9-4bea-97a2-6329bf4eaad6
---
