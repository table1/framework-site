---
id: c845e81d-78af-4173-8971-8b083634050c
blueprint: doc_function
title: 'Add an existing file to the data catalog'
name: data_add
description: |-

  Registers an existing data file with the Framework data catalog. This allows you to track files that were created outside of Framework (e.g., downloaded from external sources, copied from other projects) and use them with `data_read()` using dot notation.
usage: |-
  data_add(
    file_path,
    name = NULL,
    type = NULL,
    delimiter = "comma",
    locked = TRUE,
    update_config = TRUE
  )
value: |-

  Invisibly returns the data spec that was created
source_file: R/data_write.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: file_path
    description: 'Path to the existing file (must exist)'
    position: 1
  -
    type: parameter
    name: name
    description: |-
      Optional dot notation name for the data catalog (e.g., `inputs.raw.survey_data`).
      If NULL, derives name from file path relative to project root.
    position: 2
  -
    type: parameter
    name: type
    description: 'Optional type override. Auto-detected from file extension if NULL.'
    position: 3
  -
    type: parameter
    name: delimiter
    description: 'Delimiter for CSV files ("comma", "tab", "semicolon", "space")'
    position: 4
  -
    type: parameter
    name: locked
    description: 'Whether the file should be locked (hash-verified on read)'
    position: 5
  -
    type: parameter
    name: update_config
    description: 'If TRUE (default), also updates the YAML config with the data spec'
    position: 6
examples:
  -
    type: example
    code: |-
      # Add a downloaded CSV file to the catalog
      data_add("inputs/raw/survey_results.csv", name = "inputs.raw.survey_results")

      # Now you can read it with dot notation
      data_read("inputs.raw.survey_results")

      # Add with auto-generated name
      data_add("inputs/intermediate/cleaned_data.rds")

      # Name will be derived as "inputs.intermediate.cleaned_data"
    is_dontrun: true
    position: 2
category: 40c9c329-549a-4d17-8eb7-67b81580d7b8
---
