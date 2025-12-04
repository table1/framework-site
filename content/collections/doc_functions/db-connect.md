---
id: 57d3f83d-5ed6-4783-b89e-1fb694844ff0
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
category: 89e6f685-3b2d-4027-a6ed-86242ff32485
---
