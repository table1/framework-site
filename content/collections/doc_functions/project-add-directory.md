---
id: 93075093-9bc2-4001-a894-8266e5c6398c
blueprint: doc_function
title: 'Add custom directories to an existing project'
name: project_add_directory
description: |-

  Adds new directories to a project's configuration and creates them on the filesystem. This function is used by the GUI to allow users to add custom directories to their project structure without modifying existing directories.
details: |-

  This function performs the following steps:
  1. Validates all input arguments
  2. Reads the project's config.yml file
  3. Checks for duplicate keys in existing directories
  4. Adds the new directory to the directories section
  5. Writes the updated config.yml back to disk
  6. Creates the directory on the filesystem (with recursive creation)

  The function follows a non-destructive, additive-only approach. It will not:
  - Rename existing directories
  - Delete existing directories
  - Modify existing directory paths
  - Change the project type
usage: 'project_add_directory(project_path, key, label, path)'
value: |-

  List with success status and directory information:
  - `success`: Logical indicating whether the operation succeeded
  - `directory`: List containing key, label, path, absolute_path, and created flag
  - `error`: Character string with error message (only present if success is FALSE)
source_file: R/project_directories.R
keywords: internal
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: project_path
    description: 'Character string. Absolute path to the project root directory.'
    position: 1
  -
    type: parameter
    name: key
    description: |-
      Character string. Internal key for the directory (e.g., "analysis_archive").
      Must be unique within the project's directory configuration.
    position: 2
  -
    type: parameter
    name: label
    description: 'Character string. Human-readable label for the directory (e.g., "Analysis Archive").'
    position: 3
  -
    type: parameter
    name: path
    description: |-
      Character string. Relative path where the directory should be created
      (e.g., "analysis/archive"). Must be relative, not absolute. Parent directories
      will be created as needed.
    position: 4
sections:
  -
    type: section
    section_title: Safety
    content: |


      The function includes several safety checks:
      - Rejects absolute paths (must be relative)
      - Rejects paths containing ".." (no directory traversal)
      - Checks for duplicate keys before adding
      - Wraps filesystem operations in error handling
    position: 1
    subsections: {  }
---
