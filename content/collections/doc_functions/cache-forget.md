---
id: 6f3a9e0b-c4c7-4108-955a-70ff4db39d49
blueprint: doc_function
title: 'Remove a cached value'
name: cache_forget
description: |-

  Remove a cached value
usage: 'cache_forget(name, file = NULL)'
source_file: R/cache_delete.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: name
    description: 'The cache name to remove'
    position: 1
  -
    type: parameter
    name: file
    description: 'Optional file path of the cache (default: `cache/{name}.rds`)'
    position: 2
category: 080fe262-8af4-4651-8f2e-9c2c582f2651
---
