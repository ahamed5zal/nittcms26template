# NIT Trichy CMS Templates

A collection of front-end templates for the NIT Trichy website, built for [pragayan26cms](https://github.com/ahamed5zal/pragayan26cms) — the official CMS for NIT Trichy.

## Templates

| Template | Description |
|---|---|
| [`neonnitt/`](./neonnitt/) | Modern homepage template with Swiper carousels, animated stats, campus-life article grid, notices, and achievements/events sections. The primary template for nitt.edu |
| [`NewNittSite17/`](./NewNittSite17/) | Previous generation template — the existing nitt.edu design with full Bootstrap dependency |
| [`nitt_13inner/`](./nitt_13inner/) | Inner-page template with Symfony vendor dependencies, used for legacy inner content pages |
| [`integriti/`](./integriti/) | Alternate template design |
| [`crystalx/`](./crystalx/) | Minimal sidebar-based template |
| [`common/`](./common/) | Shared CSS, icons, and scripts (admin UI, error messages, search styling) used across multiple templates |

## Installation

### 1. Copy templates to CMS

```bash
cp -r <template-name> /path/to/pragayan26cms/cms/templates/
cp -r common/ /path/to/pragayan26cms/cms/templates/common/
```

### 2. Select template in admin panel

- Log in to pragayan26cms admin
- Navigate to `+admin` → Template Settings
- Set the desired template as default
- Optionally allow per-page template selection

### 3. Set up homepage content

For `neonnitt`, paste the homepage HTML (from `docs/main-content.md`) into the page content editor via `+settings` → Page Content.

### 4. Verify

Hard refresh (Ctrl+F5) to clear cache. Visit the homepage and admin pages to confirm layout and styling.

## Template Structure

```
template-name/
├── index.php          # Main template file (required entry point)
├── css/               # Stylesheets
│   ├── style.css      # Primary stylesheet
│   ├── color.php      # Dynamic color variables
│   ├── form.css       # Admin form overrides
│   ├── adminui.css    # Admin table/layout styles
│   ├── dashboard.css  # Dashboard submenu styling
│   ├── cms-elements.css  # CMS action bar elements
│   ├── error.css      # Error/info/warning message styling
│   └── ...            # Vendor CSS (swiper, font-awesome, etc.)
├── extras/            # JavaScript and vendor scripts
│   ├── custom.js      # Template-specific JS (carousels, scroll, animations)
│   ├── jquery.js      # jQuery library
│   └── ...            # Other JS dependencies
├── images/            # Template-specific images and icons
└── docs/              # Documentation and reference files
```

## Template System Variables

Templates render content through Pragyan CMS system variables:

| Variable | Description |
|---|---|
| `$CONTENT` | Main page body HTML (section content for homepage, forms for admin pages) |
| `$TITLE` | Page title for `<title>` tag |
| `$ACTIONBARMODULE` | Module-specific action buttons |
| `$ACTIONBARPAGE` | Page-level action buttons (settings, permissions) |
| `$ERRORSTRING`, `$WARNINGSTRING`, `$INFOSTRING` | System status messages |
| `$MENUBAR` | Navigation menu |
| `$BREADCRUMB` | Breadcrumb trail |
| `$FOOTER` | Footer content |
| `$urlRequestRoot` | Base URL path prefix |
| `$SITEDESCRIPTION`, `$SITEKEYWORDS` | Meta tag values |
| `$STARTSCRIPTS` | JavaScript to run on body load |

## neonnitt Template — Feature Details

### Hero Carousel
- Full-viewport Swiper 11 carousel with fixed background
- Auto-advances every 5s, loop enabled
- Positioned behind the fixed header with gradient overlay

### Stats Section
- Animated number count-up using IntersectionObserver
- **Default**: counts up from 0 to target value
- **`.count-down`** class: counts down from a higher value to target
  - Optional `data-start` attribute sets the starting value
  - Without `data-start`, auto-calculates as `target × 2`
- Equal-width digits via `font-variant-numeric: tabular-nums`

### Campus Life
- CSS Grid article cards (4-column, responsive)
- Featured articles (`.theme--choco`) span 2 columns with overlay text
- Stanford-style double-layer shadows and image zoom on hover

### Notices / Circulars
- 3-column CSS Grid with scrollable card bodies
- Scrollbar hidden on non-card bodies, custom styled on card bodies
- Red inline "NEW" badges replacing animated GIFs

### Achievements & Events
- Two stacked Swiper 11 carousels (Achievements, Events)
- Achievement slides: trophy icon, blockquote, author, date
- Event slides: date badge (navy circle), linked title, organizer footer

### Dashboard Submenu
- CSS collapse toggle (no Bootstrap JS dependency)
- Flex layout with pill-style item buttons
- Activated via `data-toggle="collapse"` in custom.js

### Scroll Behavior
- Header starts transparent on pages with `#hero-carousel`
- Becomes opaque after scrolling past the carousel height
- On pages without a hero carousel (admin/settings), header is always opaque
- Content automatically offset below the fixed header

## Development

### CSS Loading Order (neonnitt)

1. `fonts.css`, `swiper-bundle.min.css`, `font-awesome.min.css` — synchronous
2. `style.css`, `color.php` — synchronous (core styles)
3. `cms-elements.css`, `adminui.css`, `error.css`, `form.css`, `dashboard.css` — deferred (`media="print" onload="this.media='all'"`)

### Docker Sync

To sync changes to a Docker-based CMS instance:

```bash
cat css/style.css | docker exec -i <container> tee /var/www/html/cms/templates/neonnitt/css/style.css
cat extras/custom.js | docker exec -i <container> tee /var/www/html/cms/templates/neonnitt/extras/custom.js
```

### Quick Reference

- All sections use 120px vertical padding, 5vw horizontal
- Section IDs: `#hero-carousel`, `#a-mission-defined-by-possibility`, `#nitt-stats`, `#campus-life`, `#notices`, `#achievements-events`
- Filter classes: `theme--white`, `theme--fog`
- Card effects: `0 0 10px rgba(0,0,0,.15), 0 3px 3px rgba(0,0,0,.15)` (default) / `0 0 10px rgba(0,0,0,.2), 0 7px 10px rgba(0,0,0,.2)` (hover)

## License

Templates are developed for NIT Trichy. Refer to individual template files for licensing details.
