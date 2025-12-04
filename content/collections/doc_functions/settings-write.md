---
id: edd3c4b8-4d96-439b-b872-ecce963c325d
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
category: 37b04846-d7c5-4ef8-a426-f515e6675f1a
---
