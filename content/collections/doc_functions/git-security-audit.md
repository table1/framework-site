---
id: dc0be7b3-9c43-4af9-8097-7b44a4201ad9
blueprint: doc_function
title: 'Security audit for Framework projects'
name: git_security_audit
description: |-

  Performs a comprehensive security audit of data files in Framework projects, checking for unignored data files, git history leaks, and orphaned data files outside configured directories.
details: |-

  The security audit performs the following checks:
  - **gitignore_coverage**: Verifies all private data files are in .gitignore
  - **git_history**: Scans git history for accidentally committed data files
  - **orphaned_files**: Finds data files outside configured directories
  - **private_data_exposure**: Checks if private data is tracked by git

  Status levels:
  - **pass**: No issues found
  - **warning**: Potential issues that should be reviewed
  - **fail**: Critical security issues requiring immediate action
usage: |-
  git_security_audit(
    config_file = NULL,
    check_git_history = TRUE,
    history_depth = "all",
    auto_fix = FALSE,
    verbose = TRUE,
    extensions = c("csv", "rds", "tsv", "txt", "dat", "xlsx", "xls", "sqlite", "db", "dta",
      "sav", "zsav", "por", "sas7bdat", "sas7bcat", "xpt", "parquet", "feather", "arrow",
      "json", "xml", "h5", "hdf5")
  )
value: |-

  A structured list containing: **summary**: Data frame with check names, status (pass/warning/fail), and counts **findings**: List of data frames with detailed findings for each check **recommendations**: Character vector of actionable recommendations **audit_metadata**: List with audit timestamp, Framework version, and config info
source_file: R/security_audit.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: config_file
    description: 'Path to configuration file (default: auto-detect settings.yml/settings.yml)'
    position: 1
  -
    type: parameter
    name: check_git_history
    description: 'Logical; if TRUE (default), check git history for leaked data files'
    position: 2
  -
    type: parameter
    name: history_depth
    description: |-
      Character or numeric. "all" for full history, "shallow" for recent 100 commits,
      or numeric for specific commit count (default: "all")
    position: 3
  -
    type: parameter
    name: auto_fix
    description: 'Logical; if TRUE, automatically update .gitignore (default: FALSE)'
    position: 4
  -
    type: parameter
    name: verbose
    description: 'Logical; if TRUE (default), show progress messages'
    position: 5
  -
    type: parameter
    name: extensions
    description: 'Character vector of data file extensions to detect (default: common data formats)'
    position: 6
examples:
  -
    type: example
    code: |-
      # Basic audit (report only)
      audit <- git_security_audit()
      print(audit$summary)
      View(audit$findings$orphaned_files)

      # Quick scan without git history
      audit <- git_security_audit(check_git_history = FALSE)

      # Verbose with limited git history
      audit <- git_security_audit(history_depth = 100, verbose = TRUE)

      # Auto-fix mode (updates .gitignore)
      audit <- git_security_audit(auto_fix = TRUE)
    is_dontrun: true
    position: 2
category: 3007585c-499c-4b6d-a55a-6661cb2a18f4
---
