---
id: b73377b3-cf41-4697-8ebc-78d15df6b040
blueprint: doc_function
title: 'Create a New Project (Master Wrapper)'
name: new
description: |-

  Flexible project creation interface. Alias for `new_project()` that accepts type as a parameter.
usage: |-
  new(
    name = NULL,
    location = NULL,
    type = "project",
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
    name: type
    description: |-
      Project type. One of "project" (default), "project_sensitive",
      "course", or "presentation".
    position: 3
  -
    type: parameter
    name: browse
    description: |-
      Whether to open the project folder after creation (default: TRUE in
      interactive sessions)
    position: 4
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to `project_'
    position: 5
examples:
  -
    type: example
    code: |-
      # Create different project types
      new("analysis", "~/projects/analysis")
      new("study", "~/projects/study", type = "project_sensitive")
      new("slides", "~/projects/slides", type = "presentation")
      new("course-materials", "~/projects/course", type = "course")
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: new_project()
    link_type: function
    url: null
  -
    type: reference
    reference: new_project_sensitive()
    link_type: function
    url: null
  -
    type: reference
    reference: new_presentation()
    link_type: function
    url: null
  -
    type: reference
    reference: new_course()
    link_type: function
    url: null
category: 03dbf8c4-6a04-4747-923a-de1860585213
---
