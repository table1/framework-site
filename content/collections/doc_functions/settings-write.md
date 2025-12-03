---
id: 1c71bab7-b3f6-4c5c-a98a-f7cf9a9a0c4c
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
category: a0f48be8-c23b-41cb-a0cd-3b8e8fdf454f
---
