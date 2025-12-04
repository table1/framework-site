---
id: 8afb5fda-af84-41cd-8e3e-1059ed2e5928
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
category: dc9142c3-bca4-43fc-a7da-40d11d4554ba
---
