---
id: 037cd961-512e-442f-9e7d-e241c293970a
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
category: 40c9c329-549a-4d17-8eb7-67b81580d7b8
---
