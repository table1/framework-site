---
id: 51c08803-1f2d-45c1-9f5c-8618162cbc2f
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
category: 80765b72-8ebf-4c19-9760-5876e5973c1e
---
