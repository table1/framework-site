---
id: be40c067-022b-4a9b-b4eb-6b43822c8e2b
blueprint: doc_function
title: 'Create a Sensitive Data Project'
name: new_project_sensitive
description: |-

  Shorthand for `new_project(..., type = "project_sensitive")`. Creates a project with additional privacy protections for handling sensitive data.
usage: |-
  new_project_sensitive(
    name = NULL,
    location = NULL,
    browse = interactive(),
    ...
  )
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
    code: 'new_project_sensitive("medical-study", "~/projects/medical")'
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
