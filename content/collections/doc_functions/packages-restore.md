---
id: 392aa2bb-1b04-4a4e-b419-9bef3d54cc21
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
category: cacb883e-9a21-4374-8f1b-5399fc490f0f
---
