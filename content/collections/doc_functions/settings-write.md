---
id: 6e0e14f8-5207-4ae4-bf3b-760c8996a636
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
category: d1d943e0-ea7c-4207-824b-aeaefb4cc4e3
---
