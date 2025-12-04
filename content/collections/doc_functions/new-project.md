---
id: 5ef67d9e-bc34-495c-8578-dfb0a768dd5f
blueprint: doc_function
title: 'Create a New Framework Project'
name: new_project
description: |-

  Convenience wrapper for creating Framework projects from the command line. Uses global settings configured via `setup()` as defaults, prompts for missing required values (name and location).
details: |-

  This function is designed for the streamlined workflow:

  ```
  remotes::install_github("table1/framework")
  framework::setup()        # One-time global configuration
  framework::new_project()  # Create projects using saved defaults

  ```

  Global settings from `~/.config/framework/settings.yml` are used for:
  - Author information (name, email, affiliation
  - Default packages
  - Directory structure
  - Git settings
  - AI assistant configuration
  - Quarto format preferences
usage: |-
  new_project(
    name = NULL,
    location = NULL,
    type = "project",
    browse = interactive(),
    ...
  )
value: |-

  Invisibly returns the result from `project_create()` (list with success, path, and project_id)
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
      # Interactive - prompts for name and location
      new_project()

      # With name and location specified
      new_project("my-analysis", "~/projects/my-analysis")

      # Create a sensitive data project
      new_project("medical-study", "~/projects/medical", type = "project_sensitive")
    is_dontrun: true
    position: 2
seealso:
  -
    type: reference
    reference: setup()
    link_type: function
    url: null
  -
    type: reference
    reference: project_create()
    link_type: function
    url: null
category: 03dbf8c4-6a04-4747-923a-de1860585213
---
