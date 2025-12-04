---
id: 765468a3-c314-4275-8b97-c1b155f742d9
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
category: ff16a347-5648-4e33-8abd-bee402853878
---
