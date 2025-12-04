---
id: a01efa6a-0796-4218-a13b-5736925076e4
blueprint: doc_function
title: 'Save a report to the outputs directory'
name: save_report
description: |-

  Copies or moves a rendered report (HTML, PDF, etc.) to the configured reports directory. The directory is created lazily on first use.
usage: 'save_report(file, name = NULL, public = FALSE, overwrite = TRUE, move = FALSE)'
value: |-

  The path to the saved file (invisibly)
source_file: R/outputs.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: file
    description: 'Path to the report file to save'
    position: 1
  -
    type: parameter
    name: name
    description: 'Optional new name for the file (without extension). If NULL, uses original name.'
    position: 2
  -
    type: parameter
    name: public
    description: 'If TRUE, saves to public outputs directory (for project_sensitive type)'
    position: 3
  -
    type: parameter
    name: overwrite
    description: 'If TRUE, overwrites existing files (default: TRUE)'
    position: 4
  -
    type: parameter
    name: move
    description: 'If TRUE, moves the file instead of copying (default: FALSE)'
    position: 5
examples:
  -
    type: example
    code: |-
      # Save a rendered HTML report
      save_report("notebooks/analysis.html", "final_analysis")

      # Save to public directory
      save_report("notebooks/summary.pdf", "public_summary", public = TRUE)
    is_dontrun: true
    position: 2
category: ecad8af3-1d69-426c-bff5-e6fd71e2cdf8
---
