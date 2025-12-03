---
id: f6f95e52-d1a4-40d5-aa5f-46b94bf1960d
blueprint: doc_function
title: 'Update data spec in the correct YAML file'
name: data_spec_update
description: |-

  Traverses a dot-notated key like "final.public.test" and updates or inserts the given spec in the corresponding YAML file (either embedded in settings.yml or in an external settings/data.yml file). Automatically handles nested paths and creates intermediate structures as needed.
usage: 'data_spec_update(path, spec)'
value: |-

  Invisibly returns NULL. Function is called for its side effect of updating the YAML configuration file.
source_file: R/data_write.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: path
    description: |-
      Dot notation key (e.g., "final.public.test") indicating where
      to place the spec in the configuration hierarchy
    position: 1
  -
    type: parameter
    name: spec
    description: |-
      A named list containing the data spec fields (path, type,
      delimiter, locked, encrypted, etc.)
    position: 2
examples:
  -
    type: example
    code: |-
      # Update a spec in the config
      data_spec_update("final.public.test", list(
        path = "data/public/test.csv",
        type = "csv",
        delimiter = "comma",
        locked = TRUE
      ))
    is_dontrun: true
    position: 2
category: 1ed092eb-a460-4c61-8d52-60fdebeace65
---
