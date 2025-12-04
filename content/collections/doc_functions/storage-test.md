---
id: f7c95037-25fe-4cf0-9ca0-d70f43c9cd91
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
category: 2ceadc91-ec68-4318-9fc3-b75b4ca3bec7
---
