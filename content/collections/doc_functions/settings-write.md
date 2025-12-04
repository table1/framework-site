---
id: f69975b9-da64-4d7f-b618-82a4b9afe042
blueprint: doc_function
title: 'Write project settings'
name: settings_write
description: |-

  Writes the project settings to settings.yml or config files
usage: 'settings_write(settings, settings_file = NULL, section = NULL)'
source_file: R/config.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: settings
    description: 'The settings list to write'
    position: 1
  -
    type: parameter
    name: settings_file
    description: 'The settings file path (default: auto-detect settings.yml/config.yml)'
    position: 2
  -
    type: parameter
    name: section
    description: 'Optional section to update (e.g. "data")'
    position: 3
category: 6564d14d-7fe9-4bea-97a2-6329bf4eaad6
---
