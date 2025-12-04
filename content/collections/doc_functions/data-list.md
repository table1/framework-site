---
id: 6024ebbf-e889-46be-ad76-054afff97c49
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
category: c10f7229-66ef-4fe5-974e-a56510eeed43
---
