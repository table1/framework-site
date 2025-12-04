---
id: b71a634b-cfc4-494f-b26b-67fc9cf296ed
blueprint: doc_function
title: 'Get data from a database query'
name: db_query
description: |-

  Gets data from a database using a query and connection name. The connection is created, used, and automatically closed.
usage: 'db_query(query, connection_name, ...)'
value: |-

  A data frame with the query results
source_file: R/queries.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: query
    description: 'SQL query to execute'
    position: 1
  -
    type: parameter
    name: connection_name
    description: 'Name of the connection in config.yml'
    position: 2
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to DBI::dbGetQuery'
    position: 3
examples:
  -
    type: example
    code: 'users <- db_query("SELECT * FROM users", "my_db")'
    is_dontrun: true
    position: 2
category: d15b259b-59e7-4345-bb0c-d82d3e1b52aa
---
