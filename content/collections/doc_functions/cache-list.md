---
id: 94ea1a20-2c36-494c-9a96-9553aeb66e3a
blueprint: doc_function
title: 'List all cached values'
name: cache_list
description: |-

  Returns a data frame of all cache entries with their names, expiration times, and status (expired or active).
usage: cache_list()
value: |-

  A data frame with columns: **name**: Cache key name **expire_at**: Expiration timestamp (NA if no expiration) **created_at**: When the cache was created **updated_at**: When the cache was last updated **last_read_at**: When the cache was last read **status**: Either "active" or "expired" Returns an empty data frame if no cache entries exist.
source_file: R/cache_read.R
is_exported: true
is_common: false
examples:
  -
    type: example
    code: |-
      # List all cache entries
      cache_list()

      # Filter to see only expired caches
      cache_list() |> dplyr::filter(status == "expired")
    is_dontrun: true
    position: 2
category: ce8414c1-306f-491e-8070-17e77cb911f4
---
