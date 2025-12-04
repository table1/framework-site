---
id: fb14e84c-927f-4d07-9647-da59c4687a6e
blueprint: doc_function
title: 'Launch Framework GUI'
name: gui
description: |-

  Opens a beautiful web-based interface for Framework with documentation, project management, and settings configuration.
usage: 'gui(port = 8080, browse = TRUE)'
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
      # Launch the GUI
      framework::gui()

      # Launch on specific port
      framework::gui(port = 8888)
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: setup()
    link_type: function
    url: null
category: 7dcd3a24-b128-4b06-b2dc-05b0479c2bd3
---
