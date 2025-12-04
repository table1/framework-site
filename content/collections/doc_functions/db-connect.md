---
id: b6fed034-0bf6-4881-811a-2f4c8541b0b4
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
category: d15b259b-59e7-4345-bb0c-d82d3e1b52aa
---
