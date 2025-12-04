---
id: bd091deb-0057-4c5b-aaa2-29149c447c22
blueprint: doc_function
title: 'Add project to global configuration'
name: add_project_to_config
description: |-

  Add project to global configuration
usage: 'add_project_to_config(project_dir, project_name = NULL, project_type = NULL)'
value: |-

  Invisibly returns the project ID
source_file: R/gui_helpers.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: project_dir
    description: 'Path to project directory'
    position: 1
  -
    type: parameter
    name: project_name
    description: 'Optional project name'
    position: 2
  -
    type: parameter
    name: project_type
    description: 'Optional project type'
    position: 3
---
