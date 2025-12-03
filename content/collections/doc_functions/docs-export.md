---
id: 9665181e-0f9e-4b3e-9205-6295b210e889
blueprint: doc_function
title: 'Export Package Documentation to Database'
name: docs_export
description: |-

  Parses roxygen2-generated .Rd files and exports structured documentation to SQLite (for GUI) or other formats. This enables searchable documentation in the Framework GUI and powers the public documentation website.
details: |-

  The exporter reads all .Rd files from the man/ directory and extracts:
  - Function name, title, description, details
  - Arguments/parameters with descriptions
  - Usage signatures
  - Examples (with dontrun detection)
  - See Also references
  - Custom sections and subsections
  - Keywords

  The SQLite output includes FTS5 full-text search for fast querying.
usage: |-
  docs_export(
    output_path = "docs.db",
    man_dir = "man",
    package_name = "framework",
    package_version = NULL,
    include_internal = FALSE,
    verbose = TRUE
  )
value: |-

  Invisibly returns the database connection path
source_file: R/docs_export.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: output_path
    description: 'Path to SQLite database file. Default: "docs.db"'
    position: 1
  -
    type: parameter
    name: man_dir
    description: 'Directory containing .Rd files. Default: "man"'
    position: 2
  -
    type: parameter
    name: package_name
    description: 'Package name for metadata. Default: "framework"'
    position: 3
  -
    type: parameter
    name: package_version
    description: 'Package version for metadata. Default: NULL (auto-detect)'
    position: 4
  -
    type: parameter
    name: include_internal
    description: 'Include internal/non-exported functions. Default: FALSE'
    position: 5
  -
    type: parameter
    name: verbose
    description: 'Print progress messages. Default: TRUE'
    position: 6
examples:
  -
    type: example
    code: |-
      # Export to default location (exported functions only)
      docs_export()
      # Export to custom location
      docs_export("inst/gui/docs.db")
      # Include internal/private functions too
      docs_export("all_docs.db", include_internal = TRUE)
      # Query the exported docs
      con <- DBI::dbConnect(RSQLite::SQLite(), "docs.db")
      DBI::dbGetQuery(con, "SELECT name, title FROM functions WHERE name LIKE 'data_%'")
      DBI::dbDisconnect(con)
    is_dontrun: true
    position: 2
---
