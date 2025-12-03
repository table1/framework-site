---
id: 1b5af5b7-3935-4609-9674-311b1fb83c66
blueprint: doc_function
title: 'Install database drivers'
name: db_drivers_install
description: |-

  Interactive helper to install one or more database drivers. Provides helpful instructions and handles special cases (like ODBC).
usage: 'db_drivers_install(drivers = NULL, repos = getOption("repos"))'
value: |-

  NULL (invisible). Installs packages as side effect.
source_file: R/drivers.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: drivers
    description: |-
      Character vector. Database driver names to install
      (e.g., "postgres", "mysql", "duckdb"). If NULL, shows interactive menu.
    position: 1
  -
    type: parameter
    name: repos
    description: 'Character. CRAN repository URL. Default: getOption("repos")'
    position: 2
examples:
  -
    type: example
    code: |-
      # Install specific drivers
      db_drivers_install(c("postgres", "mysql"))
      # Interactive mode
      db_drivers_install()
    is_dontrun: true
    position: 2
category: 845368b7-eeb7-445c-8f23-536310005fa3
---
