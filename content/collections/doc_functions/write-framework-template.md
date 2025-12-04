---
id: bf7847a4-3aae-44da-9806-3179ae3c01d6
blueprint: doc_function
title: 'Overwrite a Framework template with new contents'
name: write_framework_template
description: |-

  Overwrite a Framework template with new contents
usage: 'write_framework_template(name, contents)'
source_file: R/templates.R
is_exported: true
is_common: false
parameters:
  -
    type: parameter
    name: name
    description: 'Template identifier (e.g., "notebook", "gitignore", "ai_claude")'
    position: 1
  -
    type: parameter
    name: contents
    description: 'Character string to write to the template file.'
    position: 2
---
