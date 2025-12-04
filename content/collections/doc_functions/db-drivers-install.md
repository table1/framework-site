---
id: ac614852-6929-45fb-b3ae-3e7c7fb0e9d5
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
category: f96cabbe-df7e-4d15-9d8c-0ae8f8423dc4
---
