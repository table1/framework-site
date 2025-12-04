---
id: 2098ab4d-1b8c-4e21-a299-c6ca9398bd1a
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
category: f4ce9350-d9b3-4ffa-aa5f-a5c44db07272
---
