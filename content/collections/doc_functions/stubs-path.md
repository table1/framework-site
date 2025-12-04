---
id: ef8b661d-ebb9-4bd9-8a20-1ecebf4dc41a
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
category: 861b5e0d-bc2d-4fe0-aec1-2e64ee3db54a
---
