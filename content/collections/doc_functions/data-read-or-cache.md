---
id: adec6bb1-9224-447e-88c7-d1e7cbe4a37b
blueprint: doc_function
title: 'Read data with caching'
name: data_read_or_cache
description: |-

  Loads data from the data catalog with automatic caching. If the data is already in the cache (and not expired), it returns the cached version. Otherwise, it reads from the file and caches the result.
usage: 'data_read_or_cache(path, expire_after = NULL, refresh = FALSE)'
value: |-

  The loaded data, either from cache or file
source_file: R/data_read.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: path
    description: 'Dot notation path to load data (e.g. "source.private.example")'
    position: 1
  -
    type: parameter
    name: expire_after
    description: 'Optional expiration time in hours (default: from config)'
    position: 2
  -
    type: parameter
    name: refresh
    description: 'Optional boolean or function that returns boolean to force refresh'
    position: 3
category: 40c9c329-549a-4d17-8eb7-67b81580d7b8
---
