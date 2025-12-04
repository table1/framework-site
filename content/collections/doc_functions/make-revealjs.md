---
id: 2c3437a4-310f-47d7-b652-c27073aa68d0
blueprint: doc_function
title: 'Create a Reveal.js Presentation'
name: make_revealjs
description: |-

  Convenient alias for creating reveal.js presentations. Always creates a Quarto notebook with the revealjs stub template.
usage: 'make_revealjs(name, dir = NULL, overwrite = FALSE)'
value: |-

  Invisible path to created presentation
source_file: R/make_notebook.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: name
    description: 'Character. The presentation name (with or without .qmd extension)'
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
    name: overwrite
    description: 'Logical. Whether to overwrite existing file. Default FALSE.'
    position: 3
examples:
  -
    type: example
    code: |-
      # Create notebooks/slides.qmd with reveal.js format
      make_revealjs("slides")
      # Create in specific directory
      make_revealjs("presentation", dir = "presentations")
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
  -
    type: reference
    reference: make_presentation()
    link_type: function
    url: null
category: f0a674dc-20ed-41ea-b90d-269d63df7708
---
