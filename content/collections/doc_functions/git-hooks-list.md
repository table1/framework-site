---
id: 8003129b-1a0d-437a-8757-c4f0352af19e
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
category: afbdb383-dead-4998-b2ee-f6e3f0c63115
---
