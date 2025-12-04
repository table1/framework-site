---
id: 95d70ed0-e827-4c0f-b8a2-5647307fb74f
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
category: 7dcd3a24-b128-4b06-b2dc-05b0479c2bd3
---
