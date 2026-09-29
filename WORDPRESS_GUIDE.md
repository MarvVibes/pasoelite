# Paso Elite Unisex Salon — WordPress Theme & Live Sync Guide

This custom theme converts your bespoke luxury website into a native, high-performance WordPress theme with full WordPress Dashboard editing and automatic GitHub synchronization.

---

## 📦 Theme Package
- **Theme Name**: Paso Elite Unisex Salon (`paso-elite`)
- **Ready-to-upload ZIP**: `paso-elite-theme.zip` (located in this project root)
- **Source Code**: `paso-elite/` directory

---

## 🚀 1. How to Install the Theme on WordPress (1 Minute)

1. Log in to your WordPress Admin dashboard (`yourdomain.com/wp-admin`).
2. Go to **Appearance** → **Themes**.
3. Click the **Add New** button at the top, then click **Upload Theme**.
4. Click **Choose File** and select `paso-elite-theme.zip`.
5. Click **Install Now**, then click **Activate**.
6. That's it! Your site will immediately display the full luxury salon layout with all 17 authentic hairstyles, services, SWOT-style preloader, and WhatsApp conversion forms!

---

## 🎨 2. How to Edit the Website Directly from WordPress

You have two powerful ways to manage your site without touching a line of code:

### A. The Live Customizer (Appearance → Customize)
Go to **Appearance** → **Customize** → **Paso Elite Salon Settings**:
- **Contact & Location**:
  - **Phone Number** (updates the call buttons across the site)
  - **WhatsApp Number** (updates all direct WhatsApp booking & chat links)
  - **Email Address**
  - **Physical Address** (No 6 Itu Road, Uyo)
  - **Working Hours** (Weekdays & Sundays)
- **Brand & Announcement Bar**:
  - Turn the top announcement bar ON or OFF
  - Change announcement message and button label
  - Edit official brand slogan (*"A place where good look meets confidence"*)
- **Hero Section**:
  - Change the main headline, eyebrow badge, and description
  - Upload a custom hero image (or keep the default authentic salon photo)
- **About Us Section**:
  - Edit vision, mission, and salon philosophy text
- **Social Media Links**:
  - Add your Instagram and TikTok profile URLs

Click **Publish** when finished to update your site live!

---

### B. Lookbook Gallery (Custom Post Type)
Manage your hairstyles catalog just like blog posts!
1. In your WordPress Admin sidebar, click **Lookbook Gallery** → **Add New Style**.
2. **Title**: Enter the haircut or hairstyle name (e.g. *Executive Low Taper Fade*).
3. **Featured Image**: In the right sidebar, click **Set featured image** and upload the hairstyle photo.
4. **Style Category**: Select or add a category (**Men's Cuts**, **Braids**, **Fixing & Wigs**, **Kids Cuts**, or **Spa & Care**).
5. **Style Details**: Enter the badge tag (e.g. *LOW TAPER FADE* or *KNOTLESS BRAIDS*) and optional custom WhatsApp message.
6. **Excerpt / Description**: Add a short 1-line description of the look.
7. Click **Publish**. The style will automatically appear on the front page under the corresponding filter tab!

*Note: If no posts are added yet, the theme automatically displays the authentic curated photo collection so your site is never empty.*

---

## 🔄 3. How to Automatically Update When Changes Are Made Here

You have two simple options to auto-sync changes from this code editor / GitHub repository to your live WordPress site:

### Option 1: WP Pusher (Recommended — 2-minute setup, No FTP needed)
1. Install the free plugin **WP Pusher** on your WordPress site ([wppusher.com](https://wppusher.com/)).
2. Go to **WP Pusher** → **Install Theme**.
3. **Repository**: `MarvVibes/pasoelite`
4. **Repository Subdirectory**: `paso-elite`
5. Check the box: **Push-to-Deploy**.
6. Click **Install theme**.
- **Result**: Every time you or Antigravity push code to `https://github.com/MarvVibes/pasoelite.git`, WP Pusher automatically syncs and updates the live theme files on your server within 3 seconds!

---

### Option 2: GitHub Actions Automated SFTP/FTP Deployment
This project includes a ready-to-use GitHub Actions workflow at [`.github/workflows/deploy.yml`](.github/workflows/deploy.yml).

1. In your GitHub repository at `https://github.com/MarvVibes/pasoelite`:
   - Go to **Settings** → **Secrets and variables** → **Actions**.
2. Click **New repository secret** and add:
   - `FTP_SERVER`: Your hosting FTP/SFTP server IP or hostname (e.g., `ftp.yourdomain.com`).
   - `FTP_USERNAME`: Your hosting FTP username.
   - `FTP_PASSWORD`: Your hosting FTP password.
3. Every time you push to `main`, GitHub Actions will automatically upload the modified theme files directly into `wp-content/themes/paso-elite/` on your server!

---

## 📁 File Structure Overview

```text
paso-elite/
├── style.css                  # Theme metadata & WP header
├── functions.php              # Enqueues, CPT registration, Customizer loader
├── header.php                 # Preloader, SVG defs, Announcement bar, Sticky Nav
├── footer.php                 # Clean footer, Floating WhatsApp widget
├── front-page.php             # Front page orchestrator
├── index.php                  # Fallback blog archive
├── page.php                   # Standalone page template
├── single.php                 # Single post template
├── screenshot.png             # Theme preview image in WP Admin
├── inc/
│   ├── customizer.php         # Appearance -> Customize controls
│   ├── cpt.php                # Lookbook & Services Custom Post Types
│   ├── meta-boxes.php         # Badge tags & WhatsApp pre-filled text
│   └── default-data.php       # Fallback catalog with authentic salon photos
├── template-parts/
│   ├── section-hero.php       # Hero & Brand marquee
│   ├── section-about.php      # About Us & stats
│   ├── section-categories.php # SWOT category grid & service pills
│   ├── section-lookbook.php   # Filterable Lookbook grid
│   ├── section-cta.php        # Inspiration photo CTA banner
│   ├── section-solutions.php  # Tailored occasion solutions
│   ├── section-why-us.php     # 5 Luxury editorial pillars
│   ├── section-reviews.php    # Verified 5-star client reviews
│   ├── section-appointment.php# WhatsApp reservation form
│   └── section-contact.php    # Studio address & direct contacts
└── assets/
    ├── css/index.css          # Main styling & animations
    ├── js/script.js           # Interactive filters, preloader & drawer
    └── images/                # Authentic salon photography & logo
```
