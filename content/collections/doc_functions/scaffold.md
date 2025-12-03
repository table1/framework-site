---
id: b8cd719d-e958-4f5d-8a44-ca75c1130ef1
blueprint: doc_function
title: 'Initialize and load the project environment'
name: scaffold
description: |-

  The primary entry point for working with Framework projects. Call this at the start of every notebook or script to set up your environment with all configured packages, functions, and settings.
details: |-

  `scaffold()` performs the following steps in order:
  1. **Standardizes working directory** - Finds and sets the project root, even when called from notebooks in subdirectories
  2. **Loads environment variables** - Reads secrets from `.env` file
  3. **Loads configuration** - Parses settings.yml for project settings
  4. **Sets random seed** - For reproducibility (if `seed` is configured)
  5. **Installs packages** - Any missing packages from the `packages` list
  6. **Loads packages** - Attaches all configured packages
  7. **Sources functions** - Loads all `.R` files from `functions/` directory
  8. **Creates config object** - Makes `config` available in global environment

  After `scaffold()` completes, you have access to:
  - All packages listed in settings.yml
  - All functions from your `functions/` directory
  - The `config` object for accessing settings via `config("key")`
  - Database connections configured in your project
usage: 'scaffold(config_file = NULL)'
value: |-

  Invisibly returns NULL. The main effects are side effects: loading packages, sourcing functions, and creating the `config` object.
source_file: R/scaffold.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: config_file
    description: |-
      Path to configuration file. If NULL (default), automatically
      discovers settings.yml or config.yml in the project.
    position: 1
examples:
  -
    type: example
    code: |-
      # At the top of every notebook or script:
      library(framework)
      scaffold()
      # Now you can use your configured packages and functions
      # Access settings via the config object:
      config("directories.notebooks")
      config("seed")
    is_dontrun: true
    position: 2
sections:
  -
    type: section
    section_title: 'Project Discovery'
    content: |


      When called without arguments, `scaffold()` searches for a Framework project by:
      - Looking for settings.yml or config.yml in current and parent directories
      - Checking for .Rproj files with nearby settings
      - Recognizing common Framework subdirectories (notebooks/, scripts/, etc.)

      This means you can call `scaffold()` from any subdirectory within your project.
    position: 1
    subsections: {  }
  -
    type: section
    section_title: Configuration
    content: |


      The settings.yml file controls what `scaffold()` loads. Key settings include:
      - `packages`: List of R packages to install and load
      - `seed`: Random seed for reproducibility
      - `directories`: Custom directory paths
      - `connections`: Database connection configurations
    position: 2
    subsections: {  }
seealso:
  -
    type: reference
    reference: project_create()
    link_type: function
    url: null
  -
    type: reference
    reference: standardize_wd()
    link_type: function
    url: null
  -
    type: reference
    reference: config()
    link_type: function
    url: null
category: a0f48be8-c23b-41cb-a0cd-3b8e8fdf454f
---
