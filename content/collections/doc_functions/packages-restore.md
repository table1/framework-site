---
id: 7eb56ceb-6b2f-4fde-8c1d-2ee4f04e51d9
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
category: 4e3d8e4d-7d2e-4b09-8cd7-1c4b4797d52d
---
