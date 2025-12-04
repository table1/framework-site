---
id: 85e9dfca-7b0b-4980-914e-7fe2e8756207
blueprint: doc_function
title: 'Check if database drivers are installed'
name: db_drivers_status
description: |-

  Checks which database drivers are currently available on the system. Returns a data frame showing the status of all supported database drivers.
usage: 'db_drivers_status(quiet = FALSE)'
value: |-

  A data frame with columns:
  - driver: Database driver name
  - package: Required R package
  - installed: Whether the package is installed
  - version: Package version (if installed)
source_file: R/drivers.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: quiet
    description: 'Logical. If TRUE, suppresses messages. Default: FALSE'
    position: 1
examples:
  -
    type: example
    code: |-
      # Check all drivers
      db_drivers_status()

      # Quiet mode (no messages)
      db_drivers_status(quiet = TRUE)
    is_dontrun: true
    position: 2
category: f96cabbe-df7e-4d15-9d8c-0ae8f8423dc4
---
