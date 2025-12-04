---
id: c5db6b3d-afb3-48bd-8f40-4a2d5aeed1b4
blueprint: doc_function
title: 'Generate AI Context File'
name: ai_generate_context
description: |-

  Generates a complete AI context file (CLAUDE.md, AGENTS.md, etc.) from scratch for a new project. The content is tailored to the project type and configuration.
usage: |-
  ai_generate_context(
    project_path = ".",
    project_name = NULL,
    project_type = NULL,
    config = NULL
  )
value: |-

  Character string with the complete AI context content
source_file: R/ai_context.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: project_path
    description: 'Path to the project directory (default: current directory)'
    position: 1
  -
    type: parameter
    name: project_name
    description: 'Name of the project (for header)'
    position: 2
  -
    type: parameter
    name: project_type
    description: 'Project type: "project", "project_sensitive", "course", "presentation"'
    position: 3
  -
    type: parameter
    name: config
    description: 'Project configuration (if NULL, reads from settings.yml)'
    position: 4
examples:
  -
    type: example
    code: |-
      # Generate AI context for current project
      content <- ai_generate_context()

      # Generate for a specific project type
      content <- ai_generate_context(project_type = "project_sensitive")
    is_dontrun: true
    position: 2
category: ef45b490-a095-4fec-a590-d8a2d3e939e2
---
