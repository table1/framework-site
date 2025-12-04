---
id: 27d666b6-fd88-48f7-9a0d-def8a8823de7
blueprint: doc_function
title: 'Install packages from configuration'
name: packages_install
description: |-

  Installs all packages defined in the configuration that are not already installed. This is the same logic used in scaffold(), but exposed as a standalone function.
usage: packages_install()
value: |-

  Invisibly returns TRUE on success
source_file: R/packages.R
is_exported: true
is_common: true
examples:
  -
    type: example
    code: |-
      # Install all configured packages
      packages_install()
    is_dontrun: true
    position: 2
category: cacb883e-9a21-4374-8f1b-5399fc490f0f
---
