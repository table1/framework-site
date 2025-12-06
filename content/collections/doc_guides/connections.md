---
id: connections
title: Database Connections
section: core_concepts
position: 12
description: 'Connecting to databases and running queries'
---
## Overview

Framework provides a unified interface for connecting to databases and executing queries. Define connections in `settings.yml` and Framework handles the rest.

## Configuring Connections

Define database connections in `settings.yml`:

```yaml
connections:
  analytics:
    driver: postgres
    host: env("DB_HOST")
    port: 5432
    database: analytics
    user: env("DB_USER")
    password: env("DB_PASSWORD")

  warehouse:
    driver: duckdb
    database: data/warehouse.duckdb

  local:
    driver: sqlite
    database: data/local.db
```

The `env()` syntax reads values from environment variables, keeping credentials out of your config files.

Store sensitive values in `.env`:

```bash
# .env (gitignored)
DB_HOST=db.example.com
DB_USER=analyst
DB_PASSWORD=secret
```

## Running Queries

### Get Data

```r
# Query and return results
users <- db_query("SELECT * FROM users WHERE active = true", "analytics")
```

### Execute Statements

```r
# Execute without returning data
db_execute("UPDATE stats SET last_run = NOW()", "analytics")
```

### Manual Connections

For direct DBI access:

```r
# Get a connection (remember to disconnect!)
conn <- db_connect("analytics")
DBI::dbListTables(conn)
DBI::dbDisconnect(conn)
```

Prefer `db_query()` and `db_execute()` which handle connections automatically.

## Supported Databases

| Driver | Package | Use Case |
|--------|---------|----------|
| `postgres` / `postgresql` | RPostgres | PostgreSQL databases |
| `sqlite` | RSQLite | Local SQLite files |
| `duckdb` | duckdb | Analytical workloads, Parquet files |
| `mysql` / `mariadb` | RMariaDB | MySQL/MariaDB |
| `sqlserver` / `mssql` | odbc | SQL Server |

### DuckDB Configuration

DuckDB supports additional options:

```yaml
connections:
  warehouse:
    driver: duckdb
    database: data/warehouse.duckdb
    read_only: false
    memory_limit: "4GB"
    threads: 4
```

## The Framework Database

Every project includes a local SQLite database (`framework.db`) for internal tracking:

```r
# Query Framework's internal database
cache_entries <- db_query("SELECT * FROM cache", "framework")
```

This tracks:
- Data integrity hashes
- Cache metadata
- Results registry

## Listing Connections

View all configured connections:

```r
db_list()
# Shows connection names, drivers, hosts, and databases
```

## Best Practices

### Use env() for Credentials

Never hardcode credentials:

```yaml
# Good
password: env("DB_PASSWORD")

# Never do this
password: "my_secret_password"
```

### Name Connections Clearly

```yaml
connections:
  production_analytics:  # Clear purpose
    ...
  staging_analytics:     # Environment obvious
    ...
```

---

<div style="display: flex; justify-content: space-between">

[← Caching](/docs/caching)

</div>
