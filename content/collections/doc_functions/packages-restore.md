---
id: 6d70ba73-76f4-48bc-bfac-c998f416265f
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
category: ff16a347-5648-4e33-8abd-bee402853878
---
