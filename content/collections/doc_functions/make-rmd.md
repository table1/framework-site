---
id: 929ab7b7-acd3-456f-a553-e517c339a9b9
blueprint: doc_function
title: 'Create an RMarkdown Notebook'
name: make_rmd
description: |-

  Convenient alias for `make_notebook(type = "rmarkdown")`. Creates a .Rmd file from stub templates.
usage: 'make_rmd(name, dir = NULL, stub = "default", overwrite = FALSE)'
value: |-

  Invisible path to created notebook
source_file: R/make_notebook.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: name
    description: 'Character. The file name (with or without .Rmd extension)'
    position: 1
  -
    type: parameter
    name: dir
    description: |-
      Character. Directory to create the file in. Uses your project's
      configured `directories$notebooks` setting. Default: "notebooks/".
    position: 2
  -
    type: parameter
    name: stub
    description: 'Character. Name of the stub template to use. Default "default".'
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
      # Create notebooks/analysis.Rmd
      make_rmd("analysis")

      # Use custom stub
      make_rmd("report", stub = "minimal")

      # Create in specific directory
      make_rmd("explore", dir = "work")
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
    reference: make_qmd()
    link_type: function
    url: null
category: 861b5e0d-bc2d-4fe0-aec1-2e64ee3db54a
---
