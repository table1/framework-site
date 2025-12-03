---
id: 7b0b1766-1301-411b-83b6-16fbb0144c1e
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
category: a0f48be8-c23b-41cb-a0cd-3b8e8fdf454f
---
