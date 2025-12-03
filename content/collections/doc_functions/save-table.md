---
id: ce294011-bfdf-45be-a1d5-289220ea253c
blueprint: doc_function
title: 'Save a table to the outputs directory'
name: save_table
description: |-

  Saves a data frame or tibble to the configured tables directory. The directory is created lazily on first use.
usage: 'save_table(data, name, format = "csv", public = FALSE, overwrite = TRUE, ...)'
value: |-

  The path to the saved file (invisibly)
source_file: R/outputs.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: data
    description: 'A data frame, tibble, or other tabular data'
    position: 1
  -
    type: parameter
    name: name
    description: 'The name for the output file (without extension)'
    position: 2
  -
    type: parameter
    name: format
    description: 'Output format: "csv" (default), "rds", "xlsx", or "parquet"'
    position: 3
  -
    type: parameter
    name: public
    description: 'If TRUE, saves to public outputs directory (for project_sensitive type)'
    position: 4
  -
    type: parameter
    name: overwrite
    description: 'If TRUE, overwrites existing files (default: TRUE)'
    position: 5
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to the underlying write function'
    position: 6
examples:
  -
    type: example
    code: |-
      # Save a simple table
      save_table(my_results, "regression_results")
      # Save as Excel
      save_table(my_results, "regression_results", format = "xlsx")
      # Save to public directory (for sensitive projects)
      save_table(summary_stats, "summary", public = TRUE)
    is_dontrun: true
    position: 2
category: 2a2d9843-1bf8-4510-927c-9ab627e08514
---
