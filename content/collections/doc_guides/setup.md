---
id: setup
title: Setup
section: getting_started
position: 2
description: 'Configure Framework defaults using the GUI'
---
## Launch the Setup GUI

After installing Framework, configure your defaults by running:

```r
framework::setup()
```

This opens a web interface where you set **defaults for new projects**. Any settings you configure here are applied automatically when you create a project with `new_project()`. You can always override them per-project.

If the settings page doesn't open automatically, click **New Project Defaults** in the left sidebar.

![Framework Setup GUI](/images/setup-gui.png)

## Settings Sections

- **Basics**: projects directory, editor support, notebook format, author info
- **Project Structure**: default directories for notebooks, inputs, outputs
- **Packages**: default R packages and renv settings
- **Quarto**: HTML and RevealJS rendering defaults
- **Git & Hooks**: version control and automation
- **AI Assistants**: Claude and AI tool configuration
- **Scaffold Behavior**: seed, theme, and function sourcing
- **Templates**: notebook and script templates
- **Connections**: database and S3 connection templates
- **.env Defaults**: environment variable templates

Click **Save Changes** to persist your defaults.

## Where Settings Are Stored

Global settings are stored in `~/.config/framework/`:

```
~/.config/framework/
├── templates/             # Template files are stored here
├── settings.yml           # Your defaults from setup()
├── projects.yml           # Registry of your Framework projects
└── .env                   # Global environment variables
```

- **templates/**: All default template files
- **settings.yml**: All default settings
- **projects.yml**: List of projects you've created, used by `project_open()`
- **.env**: Environment variable defaults

These files are created automatically when you first run `setup()`. You can edit them directly, but the GUI is the recommended way to manage global settings.

---

<div style="display: flex; justify-content: space-between">

[← Installation](/docs/installation)

[Conventions →](/docs/conventions)

</div>
