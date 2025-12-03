---
id: 5915346d-fd09-4bdb-8fac-e8bac7444431
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
category: 171a0b3f-4d9a-429d-b38a-59c8882aee66
---
