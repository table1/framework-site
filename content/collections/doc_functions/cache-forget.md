---
id: d49cc99b-5e07-4ed7-a6ad-e490fabcc804
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
category: ce8414c1-306f-491e-8070-17e77cb911f4
---
