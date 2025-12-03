---
id: 126dc9d2-9256-49c1-a33c-619e9869d2dc
blueprint: doc_function
title: 'Capture and Save Data to File'
name: scratch_capture
description: |-

  Saves data to a file in various formats based on the object type and specified format. If no name is provided, uses the name of the object passed in. If no location is provided, uses the scratch directory from the configuration.
usage: 'scratch_capture(x, name = NULL, to = NULL, location = NULL, n = Inf)'
value: |-

  The input object `x` invisibly.
source_file: R/scratch.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: x
    description: 'The object to save'
    position: 1
  -
    type: parameter
    name: name
    description: |-
      Optional character string specifying the name of the file (without extension).
      If not provided, will use the name of the object passed in.
    position: 2
  -
    type: parameter
    name: to
    description: |-
      Optional character string indicating the output format. One of: "text", "rds", "csv", "tsv".
      If not provided, will choose based on object type.
    position: 3
  -
    type: parameter
    name: location
    description: |-
      Optional character string specifying the directory where the file should be saved.
      If NULL, uses the scratch directory from the configuration.
    position: 4
  -
    type: parameter
    name: 'n'
    description: 'Optional number of rows to capture for data frames (default: all rows)'
    position: 5
examples:
  -
    type: example
    code: |-
      # Save a character vector as text
      scratch_capture(c("hello", "world"))
      # Save a data frame as TSV
      scratch_capture(mtcars)
      # Save an R object as RDS
      scratch_capture(list(a = 1, b = 2), to = "rds")
    is_dontrun: false
    position: 1
category: a0f48be8-c23b-41cb-a0cd-3b8e8fdf454f
---
