---
id: 6a6a8b7c-495a-43ec-a831-738a2a9f3a8d
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
category: e40ea0a7-2b4c-4f88-a134-e43393ac193d
---
