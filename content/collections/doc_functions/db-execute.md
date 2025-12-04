---
id: 6168f0f0-bca5-432d-bd8b-73ac001c169b
blueprint: doc_function
title: 'Execute a database statement'
name: db_execute
description: |-

  Executes a SQL statement on a database without returning results. The connection is created, used, and automatically closed.
usage: 'db_execute(query, connection_name, ...)'
value: |-

  Number of rows affected
source_file: R/queries.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: query
    description: 'SQL statement to execute'
    position: 1
  -
    type: parameter
    name: connection_name
    description: 'Name of the connection in config.yml'
    position: 2
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to DBI::dbExecute'
    position: 3
examples:
  -
    type: example
    code: 'rows <- db_execute("DELETE FROM cache WHERE expired = TRUE", "my_db")'
    is_dontrun: true
    position: 2
category: 89e6f685-3b2d-4027-a6ed-86242ff32485
---
