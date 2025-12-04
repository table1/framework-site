---
id: 7bc117a8-65b0-4a6f-91ba-42c00272767a
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
category: 8c73a0da-9bb6-469b-b9f5-2c3ef469a0e8
---
