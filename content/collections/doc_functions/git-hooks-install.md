---
id: a6a3e95d-da6d-49b6-98a5-2522e792852e
blueprint: doc_function
title: 'Install Git Pre-commit Hook'
name: git_hooks_install
description: |-

  Creates a pre-commit hook that runs Framework checks based on settings.yml settings.
details: |-

  Creates or updates `.git/hooks/pre-commit` to run enabled Framework hooks:
  - **ai_sync**: Sync AI assistant context files before commit
  - **data_security**: Run security audit to catch data leaks
  - **check_sensitive_dirs**: Warn about unignored sensitive directories

  Hook behavior is controlled by `git.hooks.*` settings in settings.yml.
usage: 'git_hooks_install(config_file = NULL, force = FALSE, verbose = TRUE)'
value: |-

  Invisible TRUE on success, FALSE on failure
source_file: R/git_hooks.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: config_file
    description: 'Path to configuration file (default: "settings.yml")'
    position: 1
  -
    type: parameter
    name: force
    description: 'Logical; if TRUE, overwrite existing hook (default: FALSE)'
    position: 2
  -
    type: parameter
    name: verbose
    description: 'Logical; if TRUE (default), show installation messages'
    position: 3
examples:
  -
    type: example
    code: |-
      # Install hooks based on settings.yml
      git_hooks_install()

      # Force reinstall (overwrites existing hook)
      git_hooks_install(force = TRUE)
    is_dontrun: true
    position: 2
category: b5ae3ab8-9430-4da3-b0a6-b1b475d85c6f
---
