---
id: 8bb6a190-09b7-4cf8-ba4d-cdac7b17f1af
blueprint: doc_function
title: 'Enable Specific Git Hook'
name: git_hooks_enable
description: |-

  Enables a specific hook in settings and reinstalls the pre-commit hook.
usage: 'git_hooks_enable(hook_name, config_file = NULL, verbose = TRUE)'
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
examples:
  -
    type: example
    code: |-
      git_hooks_enable("ai_sync")
      git_hooks_enable("data_security")
    is_dontrun: true
    position: 2
category: afbdb383-dead-4998-b2ee-f6e3f0c63115
---
