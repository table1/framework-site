---
id: 400b0d40-aef2-4ead-869b-1916ccf6bdac
blueprint: doc_function
title: 'Execute code within a database transaction'
name: db_transaction
description: |-

  Wraps code execution in a database transaction with automatic commit on success and rollback on error. This ensures atomicity of multiple database operations.
details: |-

  The function automatically:
  - Begins a transaction with `DBI::dbBegin()`
  - Executes the provided code
  - Commits the transaction on success with `DBI::dbCommit()`
  - Rolls back the transaction on error with `DBI::dbRollback()`

  Transactions are essential for maintaining data integrity when performing multiple related operations. If any operation fails, all changes are rolled back.
usage: 'db_transaction(conn, code)'
value: |-

  The result of the code expression
source_file: R/transactions.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: conn
    description: 'Database connection'
    position: 1
  -
    type: parameter
    name: code
    description: 'Expression or code block to execute within the transaction'
    position: 2
examples:
  -
    type: example
    code: |-
      conn <- db_connect("postgres")

      # Basic transaction
      db_transaction(conn, {
        DBI::dbExecute(conn, "INSERT INTO users (name, age) VALUES ('Alice', 30)")
        DBI::dbExecute(conn, "INSERT INTO users (name, age) VALUES ('Bob', 25)")
      })

      # Transaction with error handling - auto-rollback on error
      tryCatch({
        db_transaction(conn, {
          DBI::dbExecute(conn, "INSERT INTO users (name) VALUES ('Alice')")
          stop("Something went wrong")  # This will trigger rollback
        })
      }, error = function(e) {
        message("Transaction failed: ", e$message)
      })
      DBI::dbDisconnect(conn)
    is_dontrun: true
    position: 2
category: d15b259b-59e7-4345-bb0c-d82d3e1b52aa
---
