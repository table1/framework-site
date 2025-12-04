---
id: 88746745-a3f4-4720-9801-2b7580e213bb
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
category: 4e3d8e4d-7d2e-4b09-8cd7-1c4b4797d52d
---
