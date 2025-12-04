---
id: 4d1dae2f-b97b-4043-bf8b-720742ead9e6
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
category: 75da3bcf-a6ce-4f58-a0e2-f7eecc55ba2f
---
