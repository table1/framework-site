---
id: be40b72d-c766-4c39-b3eb-36256a16824e
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
category: 171a0b3f-4d9a-429d-b38a-59c8882aee66
---
