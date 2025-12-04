---
id: 0354236e-b98c-4d47-a837-a5c78db66fa6
blueprint: doc_function
title: 'Publish Stub Templates for Customization'
name: stubs_publish
description: |-

  Copies framework stub templates to your project's `stubs/` directory, allowing you to customize them. Similar to Laravel's `artisan vendor:publish` command.
details: |

  Stub Customization Workflow
  1. Publish stubs to your project: `stubs_publish()`
  2. Edit stubs in `stubs/` directory to match your preferences
  3. Use `make_notebook()` or `make_script()` - your custom stubs are used automatically

  Stub Naming Convention

  Stubs follow this naming pattern:
  - Notebooks: `stubs/notebook-{name}.qmd` or `stubs/notebook-{name}.Rmd`
  - Scripts: `stubs/script-{name}.R`

  Framework searches user stubs first, then falls back to built-in stubs.

  Available Placeholders

  Stubs can use these placeholders:
  - `{filename}` - File name without extension
  - `{date}` - Current date (YYYY-MM-DD)
usage: 'stubs_publish(type = "all", overwrite = FALSE, stubs = NULL)'
value: |-

  Invisible list of published file paths
source_file: R/stubs.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: type
    description: |-
      Character vector. Which stub types to publish:
      - "notebooks" - Quarto/RMarkdown notebook stubs
      - "scripts" - R script stubs
      - "all" - All stubs (default)
    position: 1
  -
    type: parameter
    name: overwrite
    description: 'Logical. Whether to overwrite existing stubs. Default FALSE.'
    position: 2
  -
    type: parameter
    name: stubs
    description: |-
      Character vector. Specific stub names to publish (e.g., "default", "minimal").
      If NULL (default), publishes all stubs of the specified type.
    position: 3
examples:
  -
    type: example
    code: |-
      # Publish all stubs
      stubs_publish()

      # Publish only notebook stubs
      stubs_publish("notebooks")

      # Publish specific stub
      stubs_publish(stubs = "default")

      # Overwrite existing stubs
      stubs_publish(overwrite = TRUE)
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: make_notebook()
    link_type: function
    url: null
  -
    type: reference
    reference: make_script()
    link_type: function
    url: null
  -
    type: reference
    reference: stubs_list()
    link_type: function
    url: null
  -
    type: reference
    reference: stubs_path()
    link_type: function
    url: null
category: b517b2b4-400e-45b0-b341-974f612409b2
---
