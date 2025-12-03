---
id: 66456d34-d7ea-4492-a7d7-127f1b33350d
blueprint: doc_function
title: 'Restore packages from renv.lock'
name: packages_restore
description: |-

  Wrapper around `renv::restore()` that requires Framework's renv integration to be enabled first.
usage: 'packages_restore(prompt = FALSE)'
value: |-

  Invisibly returns TRUE on success.
source_file: R/packages.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: prompt
    description: 'Logical. If TRUE, renv prompts before restoring.'
    position: 1
category: 171a0b3f-4d9a-429d-b38a-59c8882aee66
---
