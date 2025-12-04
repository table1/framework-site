---
id: 1e4c53fa-b205-4e9c-b1e9-cf2cf352596e
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
category: 75da3bcf-a6ce-4f58-a0e2-f7eecc55ba2f
---
