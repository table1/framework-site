---
id: 1bda1e3b-9a73-4792-abe3-5d184b812a86
blueprint: doc_function
title: 'View data with enhanced browser-based interface'
name: view_detail
description: |-

  Opens an interactive, browser-based viewer for R objects with search, filtering, sorting, pagination, and export capabilities (CSV/Excel). Provides a rich DataTables interface for data frames and enhanced views for plots, lists, and other R objects. This is the recommended function for exploring data in detail.
details: |-

  Unlike R's built-in `View()`, this function:
  - Works consistently across all IDEs (VS Code, RStudio, Positron, terminal)
  - Provides search and column filtering
  - Allows export to CSV and Excel
  - Offers sorting and pagination
  - Respects IDE-native viewers (doesn't override them)
usage: 'view_detail(x, title = NULL, max_rows = 5000)'
value: |-

  Invisibly returns NULL. Function is called for its side effect of opening a browser window with the rendered view.
source_file: R/framework_view.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: x
    description: 'The data to view (data.frame, plot, list, function, or other R object)'
    position: 1
  -
    type: parameter
    name: title
    description: 'Optional title for the view. If NULL, uses the object name.'
    position: 2
  -
    type: parameter
    name: max_rows
    description: |-
      Maximum number of rows to display for data frames (default: 5000).
      Large data frames are automatically truncated with a warning.
    position: 3
examples:
  -
    type: example
    code: |-
      # View a data frame with interactive table
      view_detail(mtcars)
      # View with custom title
      view_detail(iris, title = "Iris Dataset")
      # View a plot
      library(ggplot2)
      p <- ggplot(mtcars, aes(mpg, hp)) + geom_point()
      view_detail(p)
      # View a list
      view_detail(list(a = 1, b = 2, c = list(d = 3)))
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: view_create
    link_type: function
    url: null
category: d1d943e0-ea7c-4207-824b-aeaefb4cc4e3
---
