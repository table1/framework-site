---
id: 4376c817-355c-41ed-b893-ada32285b136
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
category: 80765b72-8ebf-4c19-9760-5876e5973c1e
---
