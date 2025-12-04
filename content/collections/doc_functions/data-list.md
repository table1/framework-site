---
id: 51449cef-85a5-49d7-a6bd-f8ac4a2e6e65
blueprint: doc_function
title: 'List all data entries from config'
name: data_list
description: |-

  Lists all data specifications defined in the configuration, showing the data key, path, type, and description (if available).
usage: data_list()
value: |-

  A data frame with columns: name, path, type, locked, description
source_file: R/data_read.R
is_exported: true
is_common: true
examples:
  -
    type: example
    code: |-
      # List all data entries
      data_list()

      # Use the alias
      list_data()
    is_dontrun: true
    position: 2
category: 1623c7a9-b777-4d53-a3a5-e6030eae8435
---
