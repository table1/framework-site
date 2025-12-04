---
id: d885c0ba-158c-419a-bd25-fbcdb7c1cea6
blueprint: doc_function
title: 'Create a new Framework project from GUI configuration'
name: project_create
description: |-

  This function creates a complete Framework project from scratch based on configuration provided by the GUI. This function builds everything programmatically.
usage: |-
  project_create(
    name,
    location,
    type = "project",
    author = list(name = "", email = "", affiliation = ""),
    packages = list(use_renv = FALSE, default_packages = list()),
    directories = list(),
    extra_directories = list(),
    ai = list(enabled = FALSE, assistants = c(), canonical_content = ""),
    git = list(use_git = TRUE, hooks = list(), gitignore_content = ""),
    scaffold = list(seed_on_scaffold = FALSE, seed = "", set_theme_on_scaffold = TRUE,
      ggplot_theme = "theme_minimal"),
    connections = NULL,
    env = NULL,
    quarto = NULL,
    render_dirs = NULL
  )
value: |-

  List with success status, project path, and project ID
source_file: R/project_create.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: name
    description: 'Project name (used for project title)'
    position: 1
  -
    type: parameter
    name: location
    description: 'Full path to the project directory (will be created)'
    position: 2
  -
    type: parameter
    name: type
    description: 'Project type: "project", "project_sensitive", "course", "presentation"'
    position: 3
  -
    type: parameter
    name: author
    description: 'List with name, email, affiliation'
    position: 4
  -
    type: parameter
    name: packages
    description: 'List with use_renv (logical) and default_packages (list of package configs)'
    position: 5
  -
    type: parameter
    name: directories
    description: 'Named list of directory paths (notebooks, scripts, functions, etc.)'
    position: 6
  -
    type: parameter
    name: extra_directories
    description: 'List of additional custom directories'
    position: 7
  -
    type: parameter
    name: ai
    description: 'List with enabled, assistants, canonical_content'
    position: 8
  -
    type: parameter
    name: git
    description: 'List with use_git, hooks, gitignore_content'
    position: 9
  -
    type: parameter
    name: scaffold
    description: 'List with seed_on_scaffold, seed, set_theme_on_scaffold, ggplot_theme, ide, positron'
    position: 10
  -
    type: parameter
    name: quarto
    description: 'List with html and revealjs format configurations for Quarto'
    position: 11
  -
    type: parameter
    name: render_dirs
    description: 'Named list of render directory paths for Quarto outputs'
    position: 12
category: 870faeca-4baf-4ecd-bcb7-7d689f13151a
---
