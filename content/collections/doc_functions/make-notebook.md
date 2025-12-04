---
id: 68ef7492-10f7-4163-90f4-81b1b02938cb
blueprint: doc_function
title: 'Create a Notebook or Script from Stub Template'
name: make_notebook
description: |-

  Creates a new Quarto (.qmd), RMarkdown (.Rmd) notebook, or R script (.R) from stub templates. Searches for user-provided stubs first (in `stubs/` directory), then falls back to framework defaults.
details: |

  **Convenient aliases**: Use `make_qmd()` or `make_rmd()` for explicit Quarto or RMarkdown notebook creation. Use `make_revealjs()` or `make_presentation()` for reveal.js presentations. Default Output

  Notebooks are created in the `notebooks/` directory by default:

  ```
  notebooks/
    1-data-cleaning.qmd
    2-analysis.qmd
    3-visualization.qmd

  ```

  Extension Normalization
  - If name includes `.qmd` or `.Rmd`, type is auto-detected
  - If no extension provided, `.qmd` is used (Quarto-first)
  - Use `type = "rmarkdown"` to default to `.Rmd`

  Stub Template Resolution

  The function searches for stub templates in this order:
  1. User stubs: `stubs/notebook-{stub}.qmd` or `stubs/notebook-{stub}.Rmd`
  2. Framework stubs: `inst/stubs/notebook-{stub}.qmd` or `inst/stubs/notebook-{stub}.Rmd`

  Custom stub templates can use placeholders:
  - `{filename}` - The notebook filename without extension
  - `{date}` - Current date (YYYY-MM-DD)
usage: |-
  make_notebook(
    name,
    type = NULL,
    dir = NULL,
    stub = "default",
    overwrite = FALSE
  )
value: |-

  Invisible path to created notebook
source_file: R/make_notebook.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: name
    description: |-
      Character. The file name. Extension determines type:
      - .qmd: Quarto notebook (default if no extension)
      - .Rmd: RMarkdown notebook
      - .R: R script
      Examples: `1-init`, `1-init.qmd`, `analysis.Rmd`, `script.R`
    position: 1
  -
    type: parameter
    name: type
    description: |-
      Character. File type: "quarto", "rmarkdown", or "script".
      Auto-detected from extension if provided. If NULL (default):
      1. Checks config `default_notebook_format` (or legacy `options$default_notebook_format`)
      2. Falls back to "quarto" (Framework is Quarto-first)
    position: 2
  -
    type: parameter
    name: dir
    description: |-
      Character. Directory to create the file in. Uses your project's
      configured `directories$notebooks` setting. Default: "notebooks/".
    position: 3
  -
    type: parameter
    name: stub
    description: |-
      Character. Name of the stub template to use. Defaults to
      "default". User can create custom stubs in `stubs/notebook-{stub}.qmd`,
      `stubs/notebook-{stub}.Rmd`, or `stubs/script-{stub}.R`.
    position: 4
  -
    type: parameter
    name: overwrite
    description: 'Logical. Whether to overwrite existing file. Default FALSE.'
    position: 5
examples:
  -
    type: example
    code: |-
      # Create notebooks/1-init.qmd (defaults to Quarto)
      make_notebook("1-init")
      # Create notebooks/analysis.Rmd (RMarkdown, extension-based)
      make_notebook("analysis.Rmd")
      # Explicit type parameter
      make_notebook("report", type = "rmarkdown")
      # Use custom stub template
      make_notebook("report", stub = "minimal")
      # Create in specific directory
      make_notebook("explore", dir = "work")
      # Convenient aliases (recommended for explicit types)
      make_qmd("analysis")       # Always creates .qmd
      make_rmd("report")         # Always creates .Rmd
      make_revealjs("slides")    # Creates reveal.js presentation
      make_presentation("deck")  # Alias for make_revealjs()
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: make_qmd()
    link_type: function
    url: null
  -
    type: reference
    reference: make_rmd()
    link_type: function
    url: null
  -
    type: reference
    reference: make_revealjs()
    link_type: function
    url: null
  -
    type: reference
    reference: make_presentation()
    link_type: function
    url: null
category: f0a674dc-20ed-41ea-b90d-269d63df7708
---
