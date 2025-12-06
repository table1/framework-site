---
id: git
title: Git Integration
section: core_concepts
position: 6
description: 'Version control and git hooks in Framework'
---
## Overview

Framework automatically initializes git repositories when you create new projects. It also manages commit identity, runs pre-commit hooks for security, and provides helper functions for common git operations.

## .gitignore Templates

Framework generates `.gitignore` files based on project type. Each project type has its own template with sensible defaults for that workflow:

- **project**: Standard research project ignores
- **project_sensitive**: Stricter rules for sensitive data
- **course**: Ignores student submissions, grade files
- **presentation**: Minimal ignores for slide decks

Customize templates under **Project Defaults** in the GUI, where each project type has its own `.gitignore Patterns` section:

![.gitignore Template Editor](/images/gitignore-template-gui.png)

Templates use pattern-based rules that work regardless of your directory structure customization.

## Commit Identity, Hooks & Settings

Configure git settings through the GUI by running `setup()` and clicking **Git & Hooks**:

```r
framework::setup()
```

![Git & Hooks GUI](/images/git-hooks-gui.png)

### Commit Identity

Framework manages two levels of git identity:

**GitHub Identity**: Your GitHub username and email, used for commits and repository operations.

**Git Identity Override**: Optional local overrides if you want commits attributed to a different name or email than your GitHub identity.

### Git Hooks

Pre-commit hooks run automatically before each commit. Enable them in the GUI or in `settings.yml`:

```yaml
git:
  hooks:
    ai_sync: true
    data_security: true
    warn_unignored_sensitive: true
```

**Sync AI Files Before Commit**: Updates non-canonical AI assistant files so all assistants share the same instructions. If your canonical file is `CLAUDE.md`, this syncs changes to `AGENTS.md` and other AI config files.

**Check for Secrets**: Scans staged files for API keys, credentials, and other secrets before allowing a commit. Helps prevent accidentally committing sensitive data.

**Warn About Unignored Sensitive Directories**: Blocks commits if directories with sensitive names (like `outputs/private/`) aren't properly gitignored. Catches misconfigured projects before data leaks.

## Git Helper Functions

Run common git operations from R without leaving your session:

```r
git_status()
git_add()
git_add("file.R")
git_commit("Fix bug")
git_push()
git_pull()
git_diff()
git_log()
```

Quick workflow:

```r
git_add()
git_commit("Add data cleaning step")
git_push()
```

---

<div style="display: flex; justify-content: space-between">

[← Templates](/docs/templates)

[AI Assistants →](/docs/ai-assistants)

</div>
