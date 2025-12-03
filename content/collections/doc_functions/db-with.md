---
id: ed49ab86-1bb3-4519-bcc6-8f6def0b4582
blueprint: doc_function
title: 'Execute code with a managed database connection'
name: db_with
description: |-

  Provides automatic connection lifecycle management. The connection is automatically closed when the code block finishes, even if an error occurs. This prevents connection leaks and ensures proper resource cleanup.
usage: 'db_with(connection_name, code)'
value: |-

  The result of evaluating `code`
source_file: R/connection_helpers.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: connection_name
    description: 'Character. Name of the connection in config.yml'
    position: 1
  -
    type: parameter
    name: code
    description: 'Expression to evaluate with the connection (use `conn` to access the connection)'
    position: 2
examples:
  -
    type: example
    code: |-
      # Safe - connection auto-closes
      users <- db_with("my_db", {
        DBI::dbGetQuery(conn, "SELECT * FROM users WHERE active = TRUE")
      })
      # Multiple operations with same connection
      result <- db_with("my_db", {
        DBI::dbExecute(conn, "INSERT INTO users (name) VALUES ('Alice')")
        DBI::dbGetQuery(conn, "SELECT * FROM users")
      })
      # Connection closes even on error
      tryCatch(
        db_with("my_db", {
          stop("Something went wrong")  # Connection still closes
        }),
        error = function(e) message(e$message)
      )
    is_dontrun: true
    position: 2
category: 845368b7-eeb7-445c-8f23-536310005fa3
---
