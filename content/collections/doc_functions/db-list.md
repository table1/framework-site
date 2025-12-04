---
id: 590b9a24-90f3-45f1-bbf8-a8fd69b4cb84
blueprint: doc_function
title: 'List all database connections from configuration'
name: db_list
description: |-

  Lists all database connections defined in the configuration, showing the connection name, driver, host, and database name (if applicable).
usage: db_list()
value: |-

  Invisibly returns NULL after printing connection list
source_file: R/connections.R
is_exported: true
is_common: false
examples:
  -
    type: example
    code: |-
      # List all connections
      db_list()
    is_dontrun: true
    position: 2
category: f4ce9350-d9b3-4ffa-aa5f-a5c44db07272
---
