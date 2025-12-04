---
id: 0fe0cc3a-e1cf-48f8-8fda-958aae0a3197
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
category: cacb883e-9a21-4374-8f1b-5399fc490f0f
---
