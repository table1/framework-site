---
id: 4484defc-6759-4803-a991-bbfef13a82b4
blueprint: doc_function
title: 'Setup Framework (First-Time Configuration)'
name: setup
description: |-

  Initializes Framework's global configuration and launches the GUI for first-time setup. This is the recommended entry point for new users.
details: |-

  Use this function after installing Framework to:
  - Set your author name and email
  - Configure default packages for new projects
  - Set IDE preferences (VS Code, RStudio)
  - Configure other global defaults
usage: 'setup(port = 8080, browse = TRUE)'
value: |-

  Invisibly returns the plumber server object
source_file: R/gui.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: port
    description: 'Port number to use (default: 8080)'
    position: 1
  -
    type: parameter
    name: browse
    description: 'Automatically open browser (default: TRUE)'
    position: 2
examples:
  -
    type: example
    code: |-
      # First-time setup
      framework::setup()
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: gui()
    link_type: function
    url: null
category: 7dcd3a24-b128-4b06-b2dc-05b0479c2bd3
---
