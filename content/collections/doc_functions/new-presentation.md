---
id: 35d1d6ef-d142-4dd3-a636-6efa427fa10f
blueprint: doc_function
title: 'Create a Presentation Project'
name: new_presentation
description: |-

  Shorthand for `new_project(..., type = "presentation")`. Creates a project optimized for RevealJS presentations.
usage: 'new_presentation(name = NULL, location = NULL, browse = interactive(), ...)'
value: |-

  Invisibly returns the result from `project_create()`
source_file: R/new_project.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: name
    description: 'Project name. If NULL (default), prompts interactively.'
    position: 1
  -
    type: parameter
    name: location
    description: |-
      Directory path where project will be created. If NULL (default),
      prompts interactively.
    position: 2
  -
    type: parameter
    name: browse
    description: |-
      Whether to open the project folder after creation (default: TRUE in
      interactive sessions)
    position: 3
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to `project_'
    position: 4
examples:
  -
    type: example
    code: 'new_presentation("quarterly-review", "~/projects/q4-review")'
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: new_project()
    link_type: function
    url: null
category: 03dbf8c4-6a04-4747-923a-de1860585213
---
