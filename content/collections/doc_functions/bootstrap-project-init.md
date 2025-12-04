---
id: b5bf1b65-8aa1-45a3-b7be-561711778ffc
blueprint: doc_function
title: 'Bootstrap project initialization file'
name: bootstrap_project_init
description: |-

  Generates an init.R file showing the initialization logic. Useful for documentation and understanding how the project was set up.
usage: 'bootstrap_project_init(output_file = "init.R")'
value: |-

  Invisibly returns TRUE on success
source_file: R/init.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: output_file
    description: 'Path where init.R should be written. Default: "init.R"'
    position: 1
examples:
  -
    type: example
    code: |-
      # Create init.R to see initialization logic
      bootstrap_project_init()

      # Write to a different location
      bootstrap_project_init("docs/init_reference.R")
    is_dontrun: true
    position: 2
category: 23e39ab1-5e54-43c8-ba60-467fc1dc22c3
---
