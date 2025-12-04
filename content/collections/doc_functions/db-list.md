---
id: 0b089739-d682-4fba-a4f4-3fcdd0211cec
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
category: d15b259b-59e7-4345-bb0c-d82d3e1b52aa
---
