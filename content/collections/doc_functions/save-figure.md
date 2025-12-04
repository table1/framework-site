---
id: 5a54cbac-b014-45bf-9453-9299bd34fcdc
blueprint: doc_function
title: 'Save a figure to the outputs directory'
name: save_figure
description: |-

  Saves a ggplot2 plot or base R graphics to the configured figures directory. The directory is created lazily on first use.
usage: |-
  save_figure(
    plot = NULL,
    name,
    format = "png",
    width = 8,
    height = 6,
    dpi = 300,
    public = FALSE,
    overwrite = TRUE,
    ...
  )
value: |-

  The path to the saved file (invisibly)
source_file: R/outputs.R
is_exported: true
is_common: true
parameters:
  -
    type: parameter
    name: plot
    description: 'A ggplot2 object, or NULL to save the current plot'
    position: 1
  -
    type: parameter
    name: name
    description: 'The name for the output file (without extension)'
    position: 2
  -
    type: parameter
    name: format
    description: 'Output format: "png" (default), "pdf", "svg", or "jpg"'
    position: 3
  -
    type: parameter
    name: width
    description: 'Width in inches (default: 8)'
    position: 4
  -
    type: parameter
    name: height
    description: 'Height in inches (default: 6)'
    position: 5
  -
    type: parameter
    name: dpi
    description: 'Resolution in dots per inch (default: 300)'
    position: 6
  -
    type: parameter
    name: public
    description: 'If TRUE, saves to public outputs directory (for project_sensitive type)'
    position: 7
  -
    type: parameter
    name: overwrite
    description: 'If TRUE, overwrites existing files (default: TRUE)'
    position: 8
  -
    type: parameter
    name: ...
    description: 'Additional arguments passed to ggsave or the graphics device'
    position: 9
examples:
  -
    type: example
    code: |-
      # Save a ggplot
      p <- ggplot(mtcars, aes(mpg, hp)) + geom_point()
      save_figure(p, "mpg_vs_hp")

      # Save as PDF for publication
      save_figure(p, "mpg_vs_hp", format = "pdf", width = 10, height = 8)

      # Save to public directory
      save_figure(p, "summary_plot", public = TRUE)
    is_dontrun: true
    position: 2
category: ecad8af3-1d69-426c-bff5-e6fd71e2cdf8
---
