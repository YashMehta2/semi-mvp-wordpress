# SemiAnalysis WordPress MVP

This repository contains the custom WordPress theme developed for the SemiAnalysis MVP migration. It perfectly mirrors the visual fidelity, responsive design, and structure of the original Next.js MVP while leveraging WordPress for content management.

## Project Overview

The goal of this MVP is to establish a modular, scalable WordPress foundation that heavily emphasizes **Industry Models** while delegating long-form research articles to the external Substack archive. The theme guarantees 1:1 parity with the Next.js design, maintaining the premium "dark mode" aesthetic, IBM Plex Sans typography, and rich visual components.

### Core Architecture

- **Models-First Direction:** The MVP pivots the primary call-to-actions toward the proprietary Industry Models (e.g. AI Compute Supply Model, Data Center Power Model).
- **External Substack Integration:** Standard research reports and articles are not hosted in WordPress; they seamlessly link out to the `semianalysis.com/archive` to prevent content duplication and leverage Substack's delivery infrastructure.
- **Dynamic Routing Interception:** Employs a custom `template_include` filter in `functions.php` to map virtual Next.js-style routes (like `/models/[slug]`) to their corresponding PHP templates without requiring complex rewrite rules.
- **Data Provider:** A central `data.php` file replicates the Next.js `data.ts` state, injecting structured metadata into the UI components cleanly.

## Tech Stack

- **Core:** PHP 8+, HTML5, Native JS
- **Styling:** Vanilla CSS mapping to Tailwind CSS utility conventions (injected via `index.css`)
- **Typography:** IBM Plex Sans (Google Fonts)
- **Icons:** SVG definitions matching Lucide React

## Folder Structure

```
semi-theme/
├── style.css             # Theme metadata
├── index.css             # Core CSS stylesheet
├── functions.php         # Theme setup, custom routing, and asset enqueueing
├── data.php              # Centralized mock data provider
├── header.php            # Global header & navigation
├── footer.php            # Global footer & newsletter CTA
├── front-page.php        # Homepage layout
├── page-models.php       # Industry Models grid archive
├── page-research.php     # Research archive (external links)
├── single-model.php      # Dynamic single model template
└── template-parts/       # Reusable modular UI sections (Hero, etc.)
```

## Setup Instructions (LocalWP)

1. Create a new local site in **LocalWP** (e.g., `semi-mvp`).
2. Navigate to your LocalWP site directory: `app/public/wp-content/themes/`.
3. Clone this repository into the `themes` directory:
   ```bash
   git clone https://github.com/YashMehta2/semi-mvp-wordpress.git semi-theme
   ```
4. Log into the WordPress Admin dashboard (`/wp-admin`).
5. Navigate to **Appearance -> Themes**.
6. Activate the **SemiTheme** custom theme.
7. Set your homepage display to a Static Page in **Settings -> Reading**, and select your front page to render `front-page.php`.

*(Note: Ensure permalinks are set to "Post name" in **Settings -> Permalinks** for the custom routing to function correctly).*
