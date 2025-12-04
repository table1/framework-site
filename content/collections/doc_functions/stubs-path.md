---
id: e00f2ceb-0ca5-48cd-9ba1-1f4ba0af3c37
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
category: 68768d7e-9d9b-416c-ac5c-08a34f7fcd99
---
