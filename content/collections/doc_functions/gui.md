---
id: d53ecef1-a521-42e2-b75a-c0f32340db2e
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
category: a0f48be8-c23b-41cb-a0cd-3b8e8fdf454f
---
