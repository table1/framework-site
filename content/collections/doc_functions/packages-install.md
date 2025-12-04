---
id: 19397b75-3d48-4a77-bee8-e454b6db09e2
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
category: ff16a347-5648-4e33-8abd-bee402853878
---
