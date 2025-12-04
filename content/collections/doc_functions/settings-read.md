---
id: 457f7173-cf09-4f99-a6b4-a90939af0d71
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
category: 7dcd3a24-b128-4b06-b2dc-05b0479c2bd3
---
