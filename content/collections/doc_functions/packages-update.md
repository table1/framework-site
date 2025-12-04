---
id: bff9b9c3-4bcf-4856-9724-41bcdd6d8708
blueprint: doc_function
title: 'Update packages from configuration'
name: packages_update
description: |-

  Updates packages defined in the configuration. If renv is enabled, uses renv::update(). Otherwise, reinstalls packages using standard installation methods.
usage: 'packages_update(packages = NULL)'
value: |-

  Invisibly returns TRUE on success
source_file: R/packages.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: packages
    description: 'Character vector of specific packages to update, or NULL to update all'
    position: 1
examples:
  -
    type: example
    code: |-
      # Update all packages
      packages_update()
      # Update specific packages
      packages_update(c("dplyr", "ggplot2"))
    is_dontrun: true
    position: 2
category: 80765b72-8ebf-4c19-9760-5876e5973c1e
---
