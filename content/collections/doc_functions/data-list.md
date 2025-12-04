---
id: 1eb44104-523f-462d-9e99-f1756f34795c
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
category: 92619a88-7705-41b4-ad68-1cd847136481
---
