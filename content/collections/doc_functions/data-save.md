---
id: 168a992f-f0e5-414f-844b-32e6aa3689d9
blueprint: doc_function
title: 'Save data using dot notation or file path'
name: data_save
description: |-

  Save data using dot notation or file path
usage: |-
  data_save(
    data,
    path,
    type = NULL,
    delimiter = "comma",
    locked = TRUE,
    force = FALSE
  )
source_file: R/data_write.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: data
    description: 'Data frame to save'
    position: 1
  -
    type: parameter
    name: path
    description: |-
      Either:
      - Dot notation: `inputs.raw.filename` resolves to inputs/raw/filename.rds
      - Direct path: "inputs/raw/filename.csv" uses path as-is

      Dot notation uses your configured directories
      (e.g., `inputs.raw`, `inputs.intermediate`, `outputs.private`).
    position: 2
  -
    type: parameter
    name: type
    description: 'Type of data file ("csv" or "rds"). Auto-detected from extension if path includes one.'
    position: 3
  -
    type: parameter
    name: delimiter
    description: 'Delimiter for CSV files ("comma", "tab", "semicolon", "space")'
    position: 4
  -
    type: parameter
    name: locked
    description: 'Whether the file should be locked after saving'
    position: 5
  -
    type: parameter
    name: force
    description: "If TRUE, creates missing directories. If FALSE (default), errors if directory doesn't exist."
    position: 6
category: 92619a88-7705-41b4-ad68-1cd847136481
---
