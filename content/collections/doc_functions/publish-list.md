---
id: 7e48a113-e164-478d-a1e5-321bf86f6967
blueprint: doc_function
title: 'List published files in S3'
name: publish_list
description: |-

  Lists files in an S3 bucket/prefix.
usage: 'publish_list(prefix = NULL, connection = NULL, max = 1000L)'
value: |-

  Data frame with columns: key, size, last_modified.
source_file: R/publish.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: prefix
    description: |-
      Character or NULL. Prefix to filter by. If NULL, lists all
      files under the connection's configured prefix.
    position: 1
  -
    type: parameter
    name: connection
    description: 'Character or NULL. S3 connection name, or NULL for default.'
    position: 2
  -
    type: parameter
    name: max
    description: 'Integer. Maximum number of files to list. Default 1000.'
    position: 3
examples:
  -
    type: example
    code: |-
      # List all published files
      publish_list()

      # List files under a prefix
      publish_list("reports/")

      # List from specific connection
      publish_list(connection = "s3_backup")
    is_dontrun: true
    position: 2
category: fa39312c-45c6-4862-a3b7-f2b9ef062cdc
---
