---
id: 655bbac7-09db-4fef-80d3-3e1d2ce646dc
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
category: ff16a347-5648-4e33-8abd-bee402853878
---
