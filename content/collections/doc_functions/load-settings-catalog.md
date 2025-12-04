---
id: 733c9d43-8fbf-4996-af02-9b82eb4b353a
blueprint: doc_function
title: 'Read the Framework settings catalog'
name: load_settings_catalog
description: |-

  The catalog defines metadata (labels, hints) and default values for settings sections. Users can override the packaged defaults by placing a `settings-catalog.yml` file in their Framework config directory (`tools::R_user_dir("framework", "config")`). When an override exists it is merged on top of the packaged catalog.
usage: 'load_settings_catalog(include_user = TRUE, validate = TRUE)'
value: |-

  A nested list representing the settings catalog.
source_file: R/settings_catalog.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: include_user
    description: |-
      Logical indicating whether to merge user overrides.
      Defaults to `TRUE`.
    position: 1
  -
    type: parameter
    name: validate
    description: |-
      Logical indicating whether to perform basic validation on
      the catalog structure. Defaults to `TRUE`.
    position: 2
---
