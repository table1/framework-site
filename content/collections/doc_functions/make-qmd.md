---
id: fc082e5e-93d7-4894-912c-5d830c6170c9
blueprint: doc_function
title: 'Create a Quarto Notebook'
name: make_qmd
description: |-

  Convenient alias for `make_notebook(type = "quarto")`. Creates a .qmd file from stub templates.
usage: 'make_qmd(name, dir = NULL, stub = "default", overwrite = FALSE)'
value: |-

  Invisible path to created notebook
source_file: R/make_notebook.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: name
    description: 'Character. The file name (with or without .qmd extension)'
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
      # Create notebooks/analysis.qmd
      make_qmd("analysis")

      # Use custom stub
      make_qmd("report", stub = "minimal")

      # Create in specific directory
      make_qmd("explore", dir = "work")
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
    reference: make_rmd()
    link_type: function
    url: null
category: b517b2b4-400e-45b0-b341-974f612409b2
---
