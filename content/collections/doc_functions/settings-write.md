---
id: 9748effa-164d-4533-b516-6916d346b0a2
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
category: 7dcd3a24-b128-4b06-b2dc-05b0479c2bd3
---
