---
id: 81dcd23a-af80-4ce7-8b72-96fcc0e44d48
blueprint: doc_function
title: 'Disable Specific Git Hook'
name: git_hooks_disable
description: |-

  Disables a specific hook in settings and reinstalls the pre-commit hook.
usage: 'git_hooks_disable(hook_name, config_file = NULL, verbose = TRUE)'
value: |-

  Invisible TRUE on success
source_file: R/git_hooks.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: hook_name
    description: 'Name of hook: "ai_sync", "data_security", or "check_sensitive_dirs"'
    position: 1
  -
    type: parameter
    name: config_file
    description: 'Path to configuration file (default: auto-discover settings.yml or settings.yml)'
    position: 2
  -
    type: parameter
    name: verbose
    description: 'Logical; if TRUE (default), show messages'
    position: 3
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
