---
id: d81d3331-9dc1-4c0b-833d-5f87214a14a8
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
category: b5ae3ab8-9430-4da3-b0a6-b1b475d85c6f
---
