---
id: f169419e-a3a3-4f48-aeb3-38f3b51d815a
blueprint: doc_function
title: 'Regenerate Dynamic Sections in AI Context File'
name: ai_regenerate_context
description: |-

  Updates only the sections marked with `<!-- @framework:regenerate -->` in an existing AI context file, preserving user customizations in unmarked sections.
usage: 'ai_regenerate_context(project_path = ".", sections = NULL, ai_file = NULL)'
value: |-

  Invisible TRUE on success
source_file: R/ai_context.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: project_path
    description: 'Path to the project directory'
    position: 1
  -
    type: parameter
    name: sections
    description: |-
      Which sections to regenerate. NULL = all regeneratable sections.
      Options: "environment", "packages", "data", "functions"
    position: 2
  -
    type: parameter
    name: ai_file
    description: 'Name of the AI context file (default: from settings or "CLAUDE.md")'
    position: 3
examples:
  -
    type: example
    code: |-
      # Regenerate all dynamic sections
      ai_regenerate_context()
      # Regenerate only packages section
      ai_regenerate_context(sections = "packages")
    is_dontrun: true
    position: 2
category: 8ff9ccfe-7086-4c9d-a6d8-a6ffd2d23b2f
---
