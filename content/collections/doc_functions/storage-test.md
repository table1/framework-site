---
id: 5585bc82-b9ce-420a-af82-13b81d73d7e1
blueprint: doc_function
title: 'Test storage connection'
name: storage_test
description: |-

  Validates that S3/storage credentials and bucket access are working.
usage: 'storage_test(connection = NULL)'
value: |-

  Logical. TRUE if connection is valid.
source_file: R/connections_s3.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: connection
    description: 'Character or NULL. Connection name, or NULL for default.'
    position: 1
examples:
  -
    type: example
    code: |-
      # Test default storage connection
      storage_test()

      # Test specific connection
      storage_test("my_s3_backup")
    is_dontrun: true
    position: 2
category: fa39312c-45c6-4862-a3b7-f2b9ef062cdc
---
