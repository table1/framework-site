---
id: 64f969db-ce89-4c04-9ee5-47605e19439e
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
category: 89e6f685-3b2d-4027-a6ed-86242ff32485
---
