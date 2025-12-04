---
id: 80e1e4b6-67d3-4b5a-a193-f41eb5ad370d
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
category: 92619a88-7705-41b4-ad68-1cd847136481
---
