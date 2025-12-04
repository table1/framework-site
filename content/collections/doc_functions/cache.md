---
id: 0fc07c6f-dffd-4db7-966a-5d6d732c61a0
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
category: e534a2c6-9352-411f-a7e2-33c14a55c141
---
