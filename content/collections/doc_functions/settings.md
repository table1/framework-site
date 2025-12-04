---
id: 2d1920fa-a69c-452e-99dc-117b2898ec9c
blueprint: doc_function
title: 'Get settings value by dot-notation key'
name: settings
description: |-

  Framework's primary configuration helper that supports both flat and hierarchical key access using dot notation. Automatically checks common locations for directory settings. Pretty-prints nested structures in interactive sessions.
details: |-

  For directory settings, the function checks multiple locations:
  - Direct: `settings("notebooks")` checks `directories$notebooks`, then `options$notebook_dir`
  - Explicit: `settings("directories.notebooks")` checks only `directories$notebooks`

  **File Discovery:**
  - Checks `settings.yml` first (Framework's preferred convention)
  - Falls back to `settings.yml` if settings.yml not found
  - You can override with explicit `settings_file` parameter

  **Output Behavior:**
  - Interactive sessions: Pretty-prints nested lists/structures and returns invisibly
  - Non-interactive (scripts): Returns raw value without printing
  - Simple values: Always returned directly without modification
usage: 'settings(key = NULL, default = NULL, settings_file = NULL)'
value: |-

  The settings value, or default if not found. In interactive sessions, nested structures are pretty-printed and returned invisibly.
source_file: R/config.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: key
    description: |-
      Character. Dot-notation key path (e.g., "notebooks" or
      "directories.notebooks" or "connections.db.host"). If NULL, returns entire settings.
    position: 1
  -
    type: parameter
    name: default
    description: 'Optional default value if key is not found (default: NULL)'
    position: 2
  -
    type: parameter
    name: settings_file
    description: 'Settings file path (default: checks "settings.yml" then "settings.yml")'
    position: 3
examples:
  -
    type: example
    code: |-
      # Get notebook directory (checks both locations)
      settings("notebooks")

      # Get explicit nested setting
      settings("directories.notebooks")
      settings("connections.db.host")

      # Get entire section
      settings("directories")  # Returns all directory settings
      settings("connections")  # Returns all connection settings

      # View entire settings
      settings()  # Returns full configuration

      # With default value
      settings("missing_key", default = "fallback")
    is_dontrun: true
    position: 2
category: 37b04846-d7c5-4ef8-a426-f515e6675f1a
---
