---
id: d93f72ff-2089-4a3e-98a2-1616726c989c
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
category: cacb883e-9a21-4374-8f1b-5399fc490f0f
---
