---
id: ca580581-6ff0-4be7-ba42-b6d66d2b2bfc
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
category: 4e3d8e4d-7d2e-4b09-8cd7-1c4b4797d52d
---
