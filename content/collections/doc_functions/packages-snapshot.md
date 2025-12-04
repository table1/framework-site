---
id: 30689b63-21c2-4106-b7a2-e9391e7d4758
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
category: 80765b72-8ebf-4c19-9760-5876e5973c1e
---
