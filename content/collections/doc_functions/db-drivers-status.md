---
id: e2e8816d-71d0-4850-b220-efdd5a853316
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
category: d15b259b-59e7-4345-bb0c-d82d3e1b52aa
---
