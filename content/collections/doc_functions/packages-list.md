---
id: 97e5a655-b02b-4263-a92c-0a38336d4dd5
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
category: cacb883e-9a21-4374-8f1b-5399fc490f0f
---
