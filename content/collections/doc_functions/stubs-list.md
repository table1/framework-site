---
id: e146eca7-9dfa-4032-9d9c-4fc1debcceae
blueprint: doc_function
title: 'List Available Stubs'
name: stubs_list
description: |-

  Shows all available stub templates that can be used with `make_notebook()`.
usage: 'stubs_list(type = NULL)'
value: |-

  Data frame with columns: name, type, source (user/framework)
source_file: R/make_notebook.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: type
    description: 'Character. Filter by type: "quarto", "rmarkdown", "script", or NULL (all).'
    position: 1
examples:
  -
    type: example
    code: |-
      # List all stubs
      stubs_list()
      # List only Quarto stubs
      stubs_list("quarto")
      # List only script stubs
      stubs_list("script")
    is_dontrun: true
    position: 2
category: 534f1815-79f5-4766-988d-9a7a51f651ad
---
