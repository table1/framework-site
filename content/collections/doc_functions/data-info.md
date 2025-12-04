---
id: 1d6014f1-0e43-4c3b-a8be-57284c83b506
blueprint: doc_function
title: 'Get data specification from config'
name: data_info
description: |-

  Gets the data specification for a given dot notation path from settings.yml. Supports dot notation (e.g., "source.private.example"), relative paths, and absolute paths. Auto-detects file type from extension and applies intelligent defaults for common formats.
usage: data_info(path)
value: |-

  A list with data specification including:
  - `path` - Full file path
  - `type` - File type (csv, rds, stata, spss, sas, etc.)
  - `delimiter` - Delimiter for CSV files (comma, tab, etc.)
  - `locked` - Whether file is locked for integrity checking
  - `private` - Whether file is in private data directory
  - `description` - Optional description of the dataset (displayed when loading)
source_file: R/data_read.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: path
    description: |-
      Dot notation path (e.g. "source.private.example"), relative path,
      or absolute path to a data file
    position: 1
examples:
  -
    type: example
    code: |-
      # Get info from dot notation
      info <- data_info("source.private.my_data")

      # Get info from file path
      info <- data_info("data/public/example.csv")
    is_dontrun: true
    position: 2
category: c10f7229-66ef-4fe5-974e-a56510eeed43
---
