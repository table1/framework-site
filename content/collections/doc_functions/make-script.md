---
id: 5c3db1c1-0151-412e-b7ef-da197d95f13c
blueprint: doc_function
title: 'Create an R Script from Stub Template'
name: make_script
description: |-

  Convenience wrapper for `make_notebook()` that creates R scripts (.R files). This is identical to calling `make_notebook("name.R")`.
details: |

  This function is a convenience wrapper that:
  1. Ensures the name ends with .R extension
  2. Uses `script_dir` config option instead of `notebook_dir`
  3. Calls `make_notebook()` with `type = "script"`
  Default Output

  Scripts are created in the `scripts/` directory by default:

  ```
  scripts/
    process-data.R
    build-features.R
    run-model.R

  ```
usage: 'make_script(name, dir = NULL, stub = "default", overwrite = FALSE)'
value: |-

  Invisible path to created script
source_file: R/make_script.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: name
    description: |-
      Character. The script name (with or without .R extension).
      Examples: "process-data", "process-data.R"
    position: 1
  -
    type: parameter
    name: dir
    description: |-
      Character. Directory to create the script in. Uses your project's
      configured `directories$scripts` setting. Default: "scripts/".
    position: 2
  -
    type: parameter
    name: stub
    description: |-
      Character. Name of the stub template to use. Defaults to
      "default". User can create custom stubs in `stubs/script-{stub}.R`.
    position: 3
  -
    type: parameter
    name: overwrite
    description: 'Logical. Whether to overwrite existing file. Default FALSE.'
    position: 4
examples:
  -
    type: example
    code: |-
      # Create script (extension optional)
      make_script("process-data")
      make_script("process-data.R")

      # Use custom stub
      make_script("etl-pipeline", stub = "etl")

      # Create in specific directory
      make_script("analysis", dir = "analysis/")
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: make_notebook()
    link_type: function
    url: null
category: b517b2b4-400e-45b0-b341-974f612409b2
---
