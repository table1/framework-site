---
id: 12ad3a17-61c3-4a33-9b43-6d23c2530fe1
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
category: ff16a347-5648-4e33-8abd-bee402853878
---
