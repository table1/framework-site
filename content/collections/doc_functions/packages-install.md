---
id: fa87dda3-70e1-4321-92f4-6bfe787c7efe
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
category: 80765b72-8ebf-4c19-9760-5876e5973c1e
---
