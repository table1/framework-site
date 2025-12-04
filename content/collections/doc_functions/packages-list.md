---
id: 7272b961-3e56-46ae-a6ed-9fe39090989e
blueprint: doc_function
title: 'List all packages from configuration'
name: packages_list
description: |-

  Lists all packages defined in the configuration, showing the package name, version pin (if specified), and source (CRAN or GitHub).
usage: packages_list()
value: |-

  Invisibly returns NULL after printing package list
source_file: R/packages.R
is_exported: true
is_common: false
examples:
  -
    type: example
    code: |-
      # List all packages
      packages_list()
    is_dontrun: true
    position: 2
category: 4e3d8e4d-7d2e-4b09-8cd7-1c4b4797d52d
---
