---
id: connections
title: Database Connections
section: core_concepts
position: 12
description: 'Connecting to databases and running queries'
---
## Overview

Framework provides a unified interface for connecting to databases, managing connection pools, and executing queries safely.

## Configuring Connections

Define database connections in `config.yml`:

```yaml
connections:
  analytics:
    driver: postgres
    host: ${DB_HOST}
    port: 5432
    dbname: analytics
    user: ${DB_USER}
    password: ${DB_PASSWORD}

  local:
    driver: sqlite
    dbname: data/local.db
```

Store sensitive credentials in `.env`:

```bash
# .env (gitignored)
DB_HOST=db.example.com
DB_USER=analyst
DB_PASSWORD=secret
```

## Running Queries

### Simple Queries

```r
# Get data from a query
users <- query_get("SELECT * FROM users WHERE active = true",
                   connection = "analytics")

# Execute without returning data
query_execute("UPDATE stats SET last_run = NOW()",
              connection = "analytics")
```

### Parameterized Queries

Safely pass parameters to prevent SQL injection:

```r
# Safe parameterized query
user <- query_get(
  "SELECT * FROM users WHERE id = $1",
  params = list(user_id),
  connection = "analytics"
)
```

## Connection Management

### Manual Connection

```r
# Get a connection object
con <- connection_get("analytics")

# Use it directly
result <- DBI::dbGetQuery(con, "SELECT 1")

# Connections are pooled - no need to close manually
```

### Connection Pooling

Framework uses connection pooling by default for better performance. Connections are reused across queries instead of opening new ones.

Configure pool settings:

```yaml
connections:
  analytics:
    driver: postgres
    host: localhost
    pool_size: 5
    idle_timeout: 60
```

## Supported Databases

| Driver | Package | Use Case |
|--------|---------|----------|
| `postgres` | RPostgres | PostgreSQL databases |
| `sqlite` | RSQLite | Local SQLite files |
| `mysql` | RMariaDB | MySQL/MariaDB |
| `sqlserver` | odbc | SQL Server |

## The Framework Database

Every project includes a local SQLite database (`framework.db`) for internal tracking:

```r
# Query Framework's internal database
cache_entries <- query_get(
  "SELECT * FROM cache",
  connection = "framework"
)
```

This tracks:
- Data integrity hashes
- Cache metadata
- Results registry

## Best Practices

### 1. Use Environment Variables

Never hardcode credentials:

```yaml
# Good
password: ${DB_PASSWORD}

# Never do this
password: "my_secret_password"
```

### 2. Name Connections Clearly

```yaml
connections:
  production_analytics:  # Clear purpose
    ...
  staging_analytics:     # Environment obvious
    ...
```

### 3. Use Appropriate Timeouts

```yaml
connections:
  slow_warehouse:
    driver: postgres
    statement_timeout: 300  # 5 minutes for slow queries
```

## Next Steps

- Explore [query_get](/docs/query-get) reference
- Learn about [data management](/docs/data-management)
- See [caching](/docs/caching) query results
