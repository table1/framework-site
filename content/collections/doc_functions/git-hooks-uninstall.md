---
id: 0e62d7cd-8425-435e-ace0-267280ea259a
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
category: 2b186ac4-d03b-466a-8735-2753eaeec217
---
