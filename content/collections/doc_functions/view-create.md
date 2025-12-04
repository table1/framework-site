---
id: a1526c09-f4dd-4088-9fc4-87f7eb0aac07
blueprint: doc_function
title: 'Create an enhanced view of R objects in the browser'
name: view_create
description: |-

  Opens an interactive, browser-based viewer for R objects with syntax highlighting, tabbed interfaces, and enhanced data table support. Handles data frames, plots, lists, functions, and more with appropriate rendering for each type.
usage: 'view_create(x, title = NULL, max_rows = 5000)'
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
      view_create(mtcars)
      # View a plot
      library(ggplot2)
      p <- ggplot(mtcars, aes(mpg, hp)) + geom_point()
      view_create(p, title = "MPG vs HP")
      # View a list with YAML and R structure tabs
      view_create(list(a = 1, b = 2, c = list(d = 3)))
    is_dontrun: true
    position: 2
category: d1d943e0-ea7c-4207-824b-aeaefb4cc4e3
---
