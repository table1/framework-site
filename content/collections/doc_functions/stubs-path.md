---
id: 4ef2b731-5830-4d18-9b5e-c8edded83e47
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
category: b517b2b4-400e-45b0-b341-974f612409b2
---
