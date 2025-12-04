---
id: 99b7960f-be6b-4392-a5d3-f1e7f358692c
blueprint: doc_function
title: 'Cache a value'
name: cache
description: |-

  Cache a value
usage: 'cache(name, value, file = NULL, expire_after = NULL)'
value: |-

  The cached value
source_file: R/cache_write.R
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
    name: value
    description: 'The value to cache'
    position: 2
  -
    type: parameter
    name: file
    description: 'Optional file path to store the cache (default: `cache/{name}.rds`)'
    position: 3
  -
    type: parameter
    name: expire_after
    description: 'Optional expiration time in hours (default: from config)'
    position: 4
category: 080fe262-8af4-4651-8f2e-9c2c582f2651
---
