---
id: 3fd91ee6-9e3f-4c55-88e1-38b065f65256
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
category: 845368b7-eeb7-445c-8f23-536310005fa3
---
