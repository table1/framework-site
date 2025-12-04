---
id: f9e64054-9c3b-49ed-b4ec-72ab09291790
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
category: 89e6f685-3b2d-4027-a6ed-86242ff32485
---
