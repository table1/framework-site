---
id: e744c0d3-8498-4134-981b-57ee89096c47
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
category: 171a0b3f-4d9a-429d-b38a-59c8882aee66
---
