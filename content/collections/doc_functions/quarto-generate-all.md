---
id: 344373ad-a9be-4d4c-8b20-5b48830c6ee9
blueprint: doc_function
title: 'Generate Quarto Configurations for Project'
name: quarto_generate_all
description: |-

  Main entry point for generating all `_quarto.yml` files in a project. Generates root config and directory-specific configs based on project type.
usage: |-
  quarto_generate_all(
    project_path,
    project_type,
    render_dirs = NULL,
    quarto_settings = NULL,
    directories = NULL,
    root_output_dir = NULL
  )
value: |-

  List with success status and paths of generated files
source_file: R/quarto_generate.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: project_path
    description: 'Character. Path to project root'
    position: 1
  -
    type: parameter
    name: project_type
    description: 'Character. One of "project", "project_sensitive", "course", "presentation"'
    position: 2
  -
    type: parameter
    name: render_dirs
    description: 'Named list. Render directories with their paths'
    position: 3
  -
    type: parameter
    name: quarto_settings
    description: 'List. Quarto settings (html and revealjs configs)'
    position: 4
  -
    type: parameter
    name: directories
    description: 'Named list. Source directories keyed the same as render_dirs'
    position: 5
  -
    type: parameter
    name: root_output_dir
    description: 'Optional output directory to set on the root _quarto.yml'
    position: 6
category: b517b2b4-400e-45b0-b341-974f612409b2
---
