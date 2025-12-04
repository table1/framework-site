---
id: 725ac50d-076c-4ca9-9ebb-39f335b06627
blueprint: doc_function
title: 'Remember a value (get from cache or compute and store)'
name: cache_remember
description: |-

  Attempts to retrieve a cached value by name. If the cache doesn't exist, is expired, or a refresh is requested, evaluates the expression and caches the result. This is the primary caching interface for expensive computations.
usage: 'cache_remember(name, expr, file = NULL, expire_after = NULL, refresh = FALSE)'
value: |-

  The cached value (if cache hit) or the result of evaluating expr (if cache miss or refresh requested)
source_file: R/cache_read.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: name
    description: 'The cache name (non-empty string identifier)'
    position: 1
  -
    type: parameter
    name: expr
    description: |-
      The expression to evaluate and cache if cache miss occurs.
      Expression is evaluated in the parent frame.
    position: 2
  -
    type: parameter
    name: file
    description: |-
      Optional file path to store the cache
      (default: `cache/{name}.rds`)
    position: 3
  -
    type: parameter
    name: expire_after
    description: |-
      Optional expiration time in hours
      (default: from config)
    position: 4
  -
    type: parameter
    name: refresh
    description: |-
      Optional boolean or function that returns boolean to force
      refresh. If TRUE or if function returns TRUE, cache is invalidated and
      expression is re-evaluated.
    position: 5
examples:
  -
    type: example
    code: |-
      # Cache expensive computation
      result <- cache_remember("my_analysis", {
        expensive_computation()
      })

      # Force refresh when data changes
      result <- cache_remember("analysis", {
        run_analysis()
      }, refresh = file.mtime("data.csv") > cache_time)
    is_dontrun: true
    position: 2
category: ce8414c1-306f-491e-8070-17e77cb911f4
---
