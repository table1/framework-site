---
id: ddda902f-ca7e-4833-9c95-034c5ae3e630
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
category: f96cabbe-df7e-4d15-9d8c-0ae8f8423dc4
---
