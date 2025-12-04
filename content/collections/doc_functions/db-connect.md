---
id: 568296fd-3985-494c-8cef-f1376fa318ed
blueprint: doc_function
title: 'Get a database connection'
name: db_connect
description: |-

  Gets a database connection based on the connection name in config.yml. For most use cases, prefer `db_query()` or `db_execute()` which handle connection lifecycle automatically.
usage: db_connect(name)
value: |-

  A database connection object (DBIConnection)
source_file: R/connections.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: name
    description: 'Character. Name of the connection in config.yml (e.g., "postgres")'
    position: 1
examples:
  -
    type: example
    code: |-
      # Preferred: use db_query() which auto-disconnects
      users <- db_query("SELECT * FROM users", "postgres")

      # Manual connection management (remember to disconnect!)
      conn <- db_connect("postgres")
      DBI::dbListTables(conn)
      DBI::dbDisconnect(conn)
    is_dontrun: true
    position: 2
category: f96cabbe-df7e-4d15-9d8c-0ae8f8423dc4
---
