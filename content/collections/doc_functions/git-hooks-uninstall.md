---
id: bc68013a-7d84-4b0e-baa0-cf52ab994fb0
blueprint: doc_function
title: 'Uninstall Git Pre-commit Hook'
name: git_hooks_uninstall
description: |-

  Removes the Framework-managed pre-commit hook.
usage: 'git_hooks_uninstall(verbose = TRUE)'
value: |-

  Invisible TRUE if hook was removed, FALSE otherwise
source_file: R/git_hooks.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: verbose
    description: 'Logical; if TRUE (default), show messages'
    position: 1
category: 3007585c-499c-4b6d-a55a-6661cb2a18f4
---
