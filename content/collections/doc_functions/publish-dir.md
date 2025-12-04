---
id: 2afa83ec-ef2b-4307-97fe-01dd00c90f0c
blueprint: doc_function
title: 'Publish a directory to S3'
name: publish_dir
description: |-

  Recursively uploads all files in a directory to S3.
usage: |-
  publish_dir(
    dir,
    dest = NULL,
    connection = NULL,
    pattern = NULL,
    recursive = TRUE
  )
value: |-

  Character vector. Public URLs of uploaded files.
source_file: R/publish.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: dir
    description: 'Character. Local directory path.'
    position: 1
  -
    type: parameter
    name: dest
    description: |-
      Character or NULL. Destination prefix in S3. If NULL, uses
      the directory name.
    position: 2
  -
    type: parameter
    name: connection
    description: 'Character or NULL. S3 connection name, or NULL for default.'
    position: 3
  -
    type: parameter
    name: pattern
    description: 'Character or NULL. Optional regex pattern to filter files.'
    position: 4
  -
    type: parameter
    name: recursive
    description: 'Logical. Whether to include subdirectories. Default TRUE.'
    position: 5
examples:
  -
    type: example
    code: |-
      # Upload entire directory
      publish_dir("outputs/dashboard/")

      # Upload to specific location
      publish_dir("outputs/dashboard/", dest = "dashboards/v2/")

      # Upload only HTML files
      publish_dir("outputs/", pattern = "\\.html$")
    is_dontrun: true
    position: 2
category: fa39312c-45c6-4862-a3b7-f2b9ef062cdc
---
