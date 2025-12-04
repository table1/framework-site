---
id: cf961b77-24ea-47c4-adcc-4233b49d2e27
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
category: e534a2c6-9352-411f-a7e2-33c14a55c141
---
