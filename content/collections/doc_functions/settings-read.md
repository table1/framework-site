---
id: f318fd8e-4e2b-42f5-8e81-9b1853a950d3
blueprint: doc_function
title: 'Read project settings'
name: settings_read
description: |-

  Reads the project settings from settings.yml or config.yml with environment-aware merging and split file resolution. Auto-discovers the settings file if not specified.
usage: 'settings_read(settings_file = NULL, environment = NULL)'
value: |-

  The settings as a list
source_file: R/config.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: settings_file
    description: 'Path to settings file (default: auto-discover settings.yml or config.yml)'
    position: 1
  -
    type: parameter
    name: environment
    description: 'Active environment name (default: R_CONFIG_ACTIVE or "default")'
    position: 2
category: 37b04846-d7c5-4ef8-a426-f515e6675f1a
---
