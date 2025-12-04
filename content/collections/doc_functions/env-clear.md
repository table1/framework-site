---
id: 9f04c483-7f16-472c-9531-4a6396005be7
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
category: 37b04846-d7c5-4ef8-a426-f515e6675f1a
---
