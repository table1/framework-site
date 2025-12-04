---
id: 4af3be6a-7b75-445c-bf9a-acbe69f3244f
blueprint: doc_function
title: 'Get Path to Stub Templates Directory'
name: stubs_path
description: |-

  Returns the path to the user's stubs directory, or the framework stubs directory if no user stubs exist.
usage: 'stubs_path(which = "auto")'
value: |-

  Character path to stubs directory
source_file: R/stubs.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: which
    description: |-
      Character. Which directory to return:
      - "user" - User's project stubs directory (stubs/)
      - "framework" - Framework's built-in stubs directory
      - "auto" (default) - User directory if it exists, otherwise framework
    position: 1
examples:
  -
    type: example
    code: |-
      # Get active stubs directory
      stubs_path()
      # Get framework stubs directory
      stubs_path("framework")
      # Get user stubs directory
      stubs_path("user")
    is_dontrun: true
    position: 2
category: f0a674dc-20ed-41ea-b90d-269d63df7708
---
