---
id: 32492d19-066a-4a67-a6c6-07b0aa832002
blueprint: doc_function
title: 'Sync AI Assistant Context Files'
name: ai_sync_context
description: |-

  Copies content from the canonical AI assistant file to all other AI files, adding a warning header to non-canonical files.
details: |-

  This function reads the `ai.canonical_file` setting from settings.yml and copies its content to all other AI assistant instruction files that exist in the project.

  The canonical file is copied as-is. Non-canonical files receive a warning header indicating they are auto-synced and should not be edited directly.

  Supported files:
  - **AGENTS.md** - Cross-platform AI assistants
  - **CLAUDE.md** - Claude Code
  - **.github/copilot-instructions.md** - GitHub Copilot
usage: 'ai_sync_context(config_file = NULL, force = FALSE, verbose = TRUE)'
value: |-

  Invisible list with sync results
source_file: R/ai_sync.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: config_file
    description: 'Path to configuration file (default: auto-detect settings.yml/settings.yml)'
    position: 1
  -
    type: parameter
    name: force
    description: 'Logical; if TRUE, overwrite even if target is newer (default: FALSE)'
    position: 2
  -
    type: parameter
    name: verbose
    description: 'Logical; if TRUE (default), show sync messages'
    position: 3
examples:
  -
    type: example
    code: |-
      # Sync AI context files
      ai_sync_context()

      # Force sync even if targets are newer
      ai_sync_context(force = TRUE)

      # Silent sync (for git hooks)
      ai_sync_context(verbose = FALSE)
    is_dontrun: true
    position: 2
category: dc9142c3-bca4-43fc-a7da-40d11d4554ba
---
