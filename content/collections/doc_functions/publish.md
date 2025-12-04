---
id: dca8379f-7410-4b8d-8fb3-6dfe8869135d
blueprint: doc_function
title: 'Publishing Functions'
name: publish
description: |-

  Functions for publishing notebooks, data, and files to S3 storage.

  Upload files or directories to an S3 bucket. This is the generic publishing function - use `publish_notebook()` for Quarto documents or `publish_data()` for data files.
usage: 'publish(source, dest = NULL, connection = NULL, overwrite = TRUE)'
value: |-

  Character. The public URL(s) of uploaded file(s).
source_file: R/publish.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: source
    description: 'Character. Local file or directory path to upload.'
    position: 1
  -
    type: parameter
    name: dest
    description: |-
      Character or NULL. Destination path in S3 bucket. If NULL,
      derives from source filename.
    position: 2
  -
    type: parameter
    name: connection
    description: |-
      Character or NULL. S3 connection name from config.yml.
      If NULL, uses the connection marked with `default: true`.
    position: 3
  -
    type: parameter
    name: overwrite
    description: 'Logical. Whether to overwrite existing files. Default TRUE.'
    position: 4
examples:
  -
    type: example
    code: |-
      # Upload a single file
      publish("outputs/report.html")

      # -> https://bucket.s3.region.amazonaws.com/prefix/report.html
      # Upload with custom destination
      publish("outputs/report.html", dest = "reports/q4-2024.html")

      # Upload a directory
      publish("outputs/charts/", dest = "reports/charts/")

      # Use specific connection
      publish("data.csv", connection = "s3_backup")
    is_dontrun: true
    position: 2
category: fa39312c-45c6-4862-a3b7-f2b9ef062cdc
---
