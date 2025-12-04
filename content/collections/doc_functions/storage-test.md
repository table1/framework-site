---
id: e648f01e-772c-4d26-bff4-53c565d86ae1
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
category: 32e516d1-a634-4a8e-a43a-b2ff07b0dfa3
---
