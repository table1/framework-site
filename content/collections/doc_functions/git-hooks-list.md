---
id: ffec5afc-cba4-46ed-85fa-4d50b78c1b57
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
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
