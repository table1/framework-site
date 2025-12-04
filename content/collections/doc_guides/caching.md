---
id: caching
title: Caching
section: core_concepts
position: 11
description: 'Caching expensive computations for faster iteration'
---
## Overview

Framework's caching system lets you save the results of expensive computations and reuse them in future sessions. This dramatically speeds up iterative analysis work.

## Basic Caching

Use `cache_remember()` to cache a computation:

```r
# First run: executes the code and caches result
processed_data <- cache_remember("my_analysis", {
  # Expensive operation
  raw_data %>%
    mutate(date = parse_date(date_string)) %>%
    filter(valid == TRUE) %>%
    group_by(category) %>%
    summarize(total = sum(amount))
})

# Subsequent runs: returns cached result instantly
processed_data <- cache_remember("my_analysis", {
  # This code won't run - cached result returned
})
```

## Cache Expiration

Set an expiration time for cached data:

```r
# Cache expires after 1 hour
fresh_data <- cache_remember("live_data", {
  fetch_from_api()
}, expire_after = "1 hour")

# Other time formats
cache_remember("daily", expr, expire_after = "1 day")
cache_remember("weekly", expr, expire_after = "7 days")
```

## Force Refresh

Force re-computation even if cached:

```r
# Ignore cache and recompute
updated <- cache_remember("my_analysis", {
  # This runs even if cached
  expensive_computation()
}, refresh = TRUE)
```

## Cache Management

### List Cached Items

```r
cache_list()
# Shows all cached items with sizes and dates
```

### Delete Specific Cache

```r
cache_delete("my_analysis")
```

### Clear All Caches

```r
cache_flush()
```

### Get Cache Info

```r
cache_info("my_analysis")
# Returns metadata about the cached item
```

## How It Works

Framework stores cached data in your project's cache directory (default: `outputs/private/cache/`). Each cached item is stored as an RDS file with metadata tracking:

- Creation timestamp
- Expiration time (if set)
- Hash for integrity verification

## Best Practices

### 1. Use Descriptive Names

```r
# Good
cache_remember("sales_2024_by_region", ...)

# Avoid
cache_remember("data1", ...)
```

### 2. Cache at the Right Level

Cache expensive operations, not simple ones:

```r
# Good: Cache expensive database query
results <- cache_remember("quarterly_report", {
  query_get("complex_aggregation")
})

# Avoid: Don't cache simple operations
# x <- cache_remember("add", { 1 + 1 })
```

### 3. Use Expiration for Live Data

```r
# Good: External data should expire
api_data <- cache_remember("exchange_rates", {
  fetch_rates_from_api()
}, expire_after = "1 hour")
```

## Next Steps

- Explore the [cache_remember](/docs/cache-remember) function reference
- Learn about [data management](/docs/data-management)
- Set up [database connections](/docs/connections)
