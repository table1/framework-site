---
id: 110eb8e9-0945-4e6e-baf4-a2563fe45580
blueprint: post
title: 'Why I Built Framework'
author: 'Erik Westlund'
excerpt: 'Framework was born out of the repetitive problems I kept running into while managing data projects—here’s what it aims to solve.'
date: '2024-12-04'
tags:
  - announcement
  - getting-started
---
Framework exists because the same operational problems kept repeating across my projects: directory structures drifted, data sources weren’t documented, connection settings lived in stale notebooks, and every engagement started with hours of setup. Framework is the set of tools I assembled so those issues stopped consuming time.

## Problems Framework Addresses

1. **Project structure** — every repository should have the same directories, notebooks, and defaults so handoffs take minutes, not hours.
2. **Data traceability** — inputs are defined once in a catalog with hashing, so I know exactly which file a notebook read.
3. **Connection management** — database and object storage credentials live in config plus `.env`, not in scripts.
4. **Automation hooks** — caching, git hooks, and the GUI automate repetitive tasks like syncing AI context files or running pre-commit checks.

Framework isn’t trying to be clever; it just keeps these workflows predictable.

## Everyday Usage

```r
library(framework)
project_create("my-analysis")
```

```r
df <- data_read("inputs.raw.survey_2024")
```

```r
results <- cache_remember("model_results", {
  train_expensive_model(data)
})
```

```r
gui()
```

Those workflows—creating projects, registering data, caching expensive steps, and reviewing inputs/outputs in the GUI—are what Framework offers right now.

## Getting Started

Install Framework from GitHub:

```r
# install.packages("devtools")
devtools::install_github("table1/framework")
```

Then create your first project:

```r
library(framework)
project_create("my-project")
```

Check out our [documentation](/docs) for detailed guides and examples.

## What’s Next

I’m still building Framework and treating it as a living toolkit. If these conventions solve the same problems you run into, let me know what’s missing. The [GitHub repository](https://github.com/table1/framework) is the best place to:

- Report issues
- Suggest features
- Contribute code

Framework won’t eliminate every workflow wrinkle, but it removes a lot of the waste that used to slow me down. I hope it helps you do the same.
