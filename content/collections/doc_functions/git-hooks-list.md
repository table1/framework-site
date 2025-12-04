---
id: bca59df4-a130-4ca1-815d-287eb39e504e
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
category: 2b186ac4-d03b-466a-8735-2753eaeec217
---
