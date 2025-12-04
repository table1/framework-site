---
id: 2e3be017-19ad-48de-9531-e28e458791ac
blueprint: doc_function
title: 'Publish data to S3'
name: publish_data
description: |-

  Uploads a data frame or existing data file to S3.
usage: 'publish_data(data, dest, format = "csv", connection = NULL, compress = FALSE)'
value: |-

  Character. Public URL of the published data.
source_file: R/publish.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: data
    description: 'Data frame or character path to existing file.'
    position: 1
  -
    type: parameter
    name: dest
    description: 'Character. Destination path in S3 (required for data frames).'
    position: 2
  -
    type: parameter
    name: format
    description: |-
      Character. Output format when `data` is a data frame:
      "csv", "rds", "parquet", or "json". Default "csv".
    position: 3
  -
    type: parameter
    name: connection
    description: 'Character or NULL. S3 connection name, or NULL for default.'
    position: 4
  -
    type: parameter
    name: compress
    description: 'Logical. Whether to gzip compress. Default FALSE.'
    position: 5
examples:
  -
    type: example
    code: |-
      # Publish a data frame
      publish_data(my_df, "datasets/customers.csv")

      # Publish as RDS
      publish_data(my_df, "datasets/customers.rds", format = "rds")

      # Publish existing file
      publish_data("outputs/model.rds", "models/v2/model.rds")
    is_dontrun: true
    position: 2
category: fa39312c-45c6-4862-a3b7-f2b9ef062cdc
---
