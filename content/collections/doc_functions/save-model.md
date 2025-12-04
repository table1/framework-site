---
id: f4babc17-eb7a-4754-99a1-c5368b30b8b5
blueprint: doc_function
title: 'Save a model to the outputs directory'
name: save_model
description: |-

  Saves a fitted model object to the configured models directory. The directory is created lazily on first use.
usage: 'save_model(model, name, format = "rds", public = FALSE, overwrite = TRUE, ...)'
value: |-

  The path to the saved file (invisibly)
source_file: R/outputs.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: model
    description: 'A fitted model object (lm, glm, tidymodels workflow, etc.)'
    position: 1
  -
    type: parameter
    name: name
    description: 'The name for the output file (without extension)'
    position: 2
  -
    type: parameter
    name: format
    description: 'Output format: "rds" (default) or "qs" (faster, requires qs package)'
    position: 3
  -
    type: parameter
    name: public
    description: 'If TRUE, saves to public outputs directory (for project_sensitive type)'
    position: 4
  -
    type: parameter
    name: overwrite
    description: 'If TRUE, overwrites existing files (default: TRUE)'
    position: 5
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to the underlying save function'
    position: 6
examples:
  -
    type: example
    code: |-
      # Fit and save a model
      model <- lm(mpg ~ hp + wt, data = mtcars)
      save_model(model, "mpg_regression")

      # Save with qs for faster serialization
      save_model(model, "mpg_regression", format = "qs")
    is_dontrun: true
    position: 2
category: ecad8af3-1d69-426c-bff5-e6fd71e2cdf8
---
