---
id: d460dbb4-a03e-4eb4-88ed-3cec6bb45fbf
blueprint: doc_function
title: 'Configure Global Framework Settings'
name: configure_global
description: |-

  Unified function for reading and writing global Framework settings to ~/.frameworkrc.json. This function provides a single source of truth for global configuration, used by both the CLI and GUI interfaces.
details: |

  Global Settings Structure
  - `author` - Author information (name, email, affiliation)
  - `defaults` - Project defaults
  - `project_type` - Default project type ("project", "presentation", "course")
  - `notebook_format` - Default notebook format ("quarto", "rmarkdown")
  - `ide` - IDE preference ("vscode", "rstudio", "both", "none")
  - `use_git` - Initialize git repositories by default
  - `use_renv` - Enable renv by default
  - `seed` - Default random seed
  - `seed_on_scaffold` - Set seed during scaffold()
  - `ai_support` - Enable AI assistant support
  - `ai_assistants` - List of AI assistants ("claude", "agents", etc.)
  - `ai_canonical_file` - Canonical AI instruction file
  - `packages` - Default package list
  - `directories` - Default directory structure
  - `git_hooks` - Git hook preferences
  - `projects` - Registered projects list
  - `active_project` - Currently active project path
usage: 'configure_global(settings = NULL, validate = TRUE)'
value: |-

  Invisibly returns updated global configuration
source_file: R/configure.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: settings
    description: 'List. Settings to update (partial updates supported)'
    position: 1
  -
    type: parameter
    name: validate
    description: 'Logical. Validate settings before saving (default: TRUE)'
    position: 2
examples:
  -
    type: example
    code: |-
      # Update author information
      configure_global(settings = list(
        author = list(
          name = "Jane Doe",
          email = "jane@example.com"
        )
      ))

      # Update default project type
      configure_global(settings = list(
        defaults = list(
          project_type = "presentation"
        )
      ))

      # Get current settings (read-only)
      current <- configure_global()
    is_dontrun: true
    position: 2
---
