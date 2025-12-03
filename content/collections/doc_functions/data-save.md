---
id: a93216a2-e568-4b5a-a833-8afd448d095e
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
category: 1ed092eb-a460-4c61-8d52-60fdebeace65
---
