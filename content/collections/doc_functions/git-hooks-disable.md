---
id: bd063ca0-2ed3-4fb5-8e6d-6c285a38c968
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
category: afbdb383-dead-4998-b2ee-f6e3f0c63115
---
