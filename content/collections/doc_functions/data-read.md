---
id: 9e704114-9662-4d42-b0e6-67827117e1f4
blueprint: doc_function
title: 'Read data using dot notation path or direct file path'
name: data_read
description: |-

  Supports CSV, TSV, RDS, Excel (.xlsx, .xls), Stata (.dta), SPSS (.sav, .zsav, .por), and SAS (.sas7bdat, .xpt) file formats.
usage: 'data_read(path, delim = NULL, keep_attributes = FALSE, ...)'
source_file: R/data_read.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: path
    description: 'Dot notation path (e.g. "source.private.example") or direct file path'
    position: 1
  -
    type: parameter
    name: delim
    description: 'Optional delimiter for CSV files ("comma", "tab", "semicolon", "space")'
    position: 2
  -
    type: parameter
    name: keep_attributes
    description: 'Logical flag to preserve special attributes (e.g., haven labels). Default: FALSE (strips attributes)'
    position: 3
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to read functions (readr::read_delim, readxl::read_excel, haven::read_*, etc.)'
    position: 4
category: 1623c7a9-b777-4d53-a3a5-e6030eae8435
---
