---
id: 965c8529-a53f-49b6-b6a9-a2d303b96a1a
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
category: 080fe262-8af4-4651-8f2e-9c2c582f2651
---
