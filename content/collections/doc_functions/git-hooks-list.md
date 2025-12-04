---
id: 84c037d8-203e-4199-b42e-e328ffc69de0
blueprint: doc_function
title: 'List Git Hook Status'
name: git_hooks_list
description: |-

  Shows which hooks are enabled and their current status.
usage: 'git_hooks_list(config_file = NULL)'
value: |-

  Data frame with hook information
source_file: R/git_hooks.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: config_file
    description: 'Path to configuration file (default: auto-discover settings.yml or settings.yml)'
    position: 1
category: 3007585c-499c-4b6d-a55a-6661cb2a18f4
---
