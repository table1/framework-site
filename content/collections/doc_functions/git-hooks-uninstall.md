---
id: ca6908fe-de88-4d2a-930b-9308e9646906
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
category: d7e03087-dcc9-4f26-86aa-5e7491e5e0df
---
