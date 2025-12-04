---
id: 3e6e18f5-ec9e-4226-87fe-0353dac80fe0
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
category: b5ae3ab8-9430-4da3-b0a6-b1b475d85c6f
---
