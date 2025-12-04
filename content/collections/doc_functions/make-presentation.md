---
id: 32c13555-d5f8-41ad-a42a-b5ef9d1ad402
blueprint: doc_function
title: 'Create a Presentation'
name: make_presentation
description: |-

  Alias for `make_revealjs()`. Creates a Quarto reveal.js presentation.
usage: 'make_presentation(name, dir = NULL, overwrite = FALSE)'
value: |-

  Invisible path to created presentation
source_file: R/make_notebook.R
is_exported: true
is_common: true
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
      # Create notebooks/deck.qmd with reveal.js format
      make_presentation("deck")
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
    reference: make_revealjs()
    link_type: function
    url: null
category: f0a674dc-20ed-41ea-b90d-269d63df7708
---
