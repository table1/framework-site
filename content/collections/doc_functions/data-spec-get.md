---
id: 585ab311-3d4b-4f63-b951-d5fb8a84e2c7
blueprint: doc_function
title: 'Get data specification from config'
name: data_spec_get
description: |-

  Gets the data specification for a given dot notation path from settings.yml. Supports dot notation (e.g., "source.private.example"), relative paths, and absolute paths. Auto-detects file type from extension and applies intelligent defaults for common formats.
usage: data_spec_get(path)
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
      # Get spec from dot notation
      spec <- data_spec_get("source.private.my_data")

      # Get spec from file path
      spec <- data_spec_get("data/public/example.csv")
    is_dontrun: true
    position: 2
category: 40c9c329-549a-4d17-8eb7-67b81580d7b8
---
