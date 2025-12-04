---
id: db785a4a-3449-4430-b66d-925272b6d555
blueprint: doc_function
title: 'Publish a Quarto notebook to S3'
name: publish_notebook
description: |-

  Renders a Quarto document and uploads it to S3. The notebook is rendered to a temporary directory, uploaded, then cleaned up.
details: |-

  The URL format depends on the S3 connection's `static_hosting` setting:
  - `static_hosting: true` -> uploads to `dest/index.html`, returns `dest/`
  - `static_hosting: false` (default) -> uploads as `dest.html`, returns `dest.html`
usage: |-
  publish_notebook(
    file,
    dest = NULL,
    connection = NULL,
    self_contained = TRUE,
    format = "html",
    ...
  )
value: |-

  Character. Public URL of the published notebook.
source_file: R/publish.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: file
    description: 'Character. Path to .qmd file.'
    position: 1
  -
    type: parameter
    name: dest
    description: |-
      Character or NULL. Destination path in S3 (without extension).
      If NULL, derives from filename (e.g., "analysis.qmd" -> "analysis").
    position: 2
  -
    type: parameter
    name: connection
    description: 'Character or NULL. S3 connection name, or NULL for default.'
    position: 3
  -
    type: parameter
    name: self_contained
    description: |-
      Logical. Whether to embed all resources. Default TRUE.
      Ignored if `static_hosting: false` (always renders self-contained).
    position: 4
  -
    type: parameter
    name: format
    description: 'Character. Output format. Default "html".'
    position: 5
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to quarto render.'
    position: 6
examples:
  -
    type: example
    code: |-
      # With static_hosting: true -> returns /analysis/
      # With static_hosting: false -> returns /analysis.html
      publish_notebook("notebooks/analysis.qmd")
      # Publish to specific location
      publish_notebook("notebooks/analysis.qmd", dest = "reports/2024/q4")
      # Publish non-self-contained (only with static_hosting: true)
      publish_notebook("notebooks/analysis.qmd", self_contained = FALSE)
    is_dontrun: true
    position: 2
category: 32e516d1-a634-4a8e-a43a-b2ff07b0dfa3
---
