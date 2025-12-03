---
id: ed3813c8-adcf-48b1-9ed6-b402a2b3f91d
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
category: afbdb383-dead-4998-b2ee-f6e3f0c63115
---
