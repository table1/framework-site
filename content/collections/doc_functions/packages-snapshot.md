---
id: ea0b8e71-72f7-4240-b5b4-9040124d86ce
blueprint: doc_function
title: 'Snapshot current package library (renv)'
name: packages_snapshot
description: |-

  Wrapper around `renv::snapshot()` that requires Framework's renv integration to be enabled first.
usage: 'packages_snapshot(prompt = FALSE)'
value: |-

  Invisibly returns TRUE on success.
source_file: R/packages.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: prompt
    description: 'Logical. If TRUE, renv prompts before writing the snapshot.'
    position: 1
category: 171a0b3f-4d9a-429d-b38a-59c8882aee66
---
