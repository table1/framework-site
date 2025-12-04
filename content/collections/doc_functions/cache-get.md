---
id: 9daf27fb-f734-493d-9727-d7684923be59
blueprint: doc_function
title: 'Get a cached value'
name: cache_get
description: |-

  Get a cached value
usage: 'cache_get(name, file = NULL, expire_after = NULL)'
value: |-

  The cached value, or NULL if not found, expired, or hash mismatch
source_file: R/cache_read.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: name
    description: 'The cache name'
    position: 1
  -
    type: parameter
    name: file
    description: 'Optional file path to store the cache (default: `cache/{name}.rds`)'
    position: 2
  -
    type: parameter
    name: expire_after
    description: 'Optional expiration time in hours (default: from config)'
    position: 3
category: e534a2c6-9352-411f-a7e2-33c14a55c141
---
