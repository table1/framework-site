---
id: installation
title: Installation
section: getting_started
position: 1
description: 'How to install Framework and its dependencies'
---
## Requirements

Framework requires:
- **R** version 4.1 or higher
- **RStudio** (recommended) or any R IDE

## Install from GitHub

The easiest way to install Framework is from GitHub using the `remotes` package:

```r
# Install remotes if needed
install.packages("remotes")

# Install Framework
remotes::install_github("erikwestlund/framework")
```

## Verify Installation

After installation, verify Framework is working:

```r
library(framework)
packageVersion("framework")
```

You should see the version number displayed.

## Optional Dependencies

Framework has some optional dependencies for enhanced functionality:

### For Encryption Support
```r
install.packages("sodium")
```

### For Enhanced Graphics
```r
install.packages("httpgd")
```

### For Interactive Data Tables
```r
install.packages("DT")
```

## Updating Framework

To update to the latest version:

```r
remotes::install_github("erikwestlund/framework")
```

## Next Steps

Once installed, you're ready to [create your first project](/docs/quick-start).
