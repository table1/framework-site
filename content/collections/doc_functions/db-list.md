---
id: 7c7c4e5f-9a11-4e54-b5b9-0fab63381c3e
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
category: 845368b7-eeb7-445c-8f23-536310005fa3
---
