---
id: c28f0f81-ea23-4531-b7c2-b17ab5e0bcde
blueprint: doc_function
title: 'Create a Course Project'
name: new_course
description: |-

  Shorthand for `new_project(..., type = "course")`. Creates a project structured for teaching materials with slides, assignments, and modules.
usage: 'new_course(name = NULL, location = NULL, browse = interactive(), ...)'
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
    code: 'new_course("stats-101", "~/projects/stats-101")'
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
