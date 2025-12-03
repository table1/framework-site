---
id: 7cdfcd27-ac7f-498d-a034-2fdb0897e324
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
category: aaca8600-a1f4-4f91-b81d-3d5af48a9c07
---
