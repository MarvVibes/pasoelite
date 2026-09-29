<?php
/**
 * Header template for Paso Elite Theme
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$phone       = paso_get_phone();
$whatsapp    = paso_get_whatsapp();
$slogan      = paso_get_slogan();
$default_logo = get_template_directory_uri() . '/assets/images/real_logo.jpg';
$logo_url    = has_custom_logo() ? wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full') : $default_logo;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/jpeg" href="<?php echo esc_url($logo_url); ?>" />

  <!-- Typography modeled on SWOT: DM Sans & Manrope -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Manrope:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- =====================================================
       PRELOADER ANIMATION (Modeled on SWOT Gadgets)
       ===================================================== -->
  <div class="site-preloader" id="sitePreloader" aria-label="Loading Paso Elite Salon">
    <div class="preloader-content">
      <div class="preloader-logo-wrap">
        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" class="preloader-logo" width="68" height="68" />
        <div class="preloader-ring"></div>
      </div>
      <div class="preloader-brand">
        <span class="preloader-title">PASO ELITE</span>
        <span class="preloader-tagline"><?php echo esc_html($slogan); ?></span>
      </div>
      <div class="preloader-progress-track">
        <div class="preloader-progress-bar"></div>
      </div>
    </div>
  </div>

  <!-- Lucide & Brand Icons SVG Defs (identical to SWOT Gadgets) -->
  <svg class="svg-defs" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
    <defs>
      <symbol id="lucide-star" viewBox="0 0 24 24">
        <path
          d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
      </symbol>
      <symbol id="lucide-arrow-right" viewBox="0 0 24 24">
        <path d="M5 12h14" />
        <path d="m12 5 7 7-7 7" />
      </symbol>
      <symbol id="lucide-arrow-up-right" viewBox="0 0 24 24">
        <path d="M7 7h10v10" />
        <path d="M7 17 17 7" />
      </symbol>
      <symbol id="lucide-check" viewBox="0 0 24 24">
        <path d="M20 6 9 17l-5-5" />
      </symbol>
      <symbol id="lucide-circle-check" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10" />
        <path d="m9 12 2 2 4-4" />
      </symbol>
      <symbol id="lucide-scissors" viewBox="0 0 24 24">
        <circle cx="6" cy="6" r="3" />
        <circle cx="6" cy="18" r="3" />
        <line x1="20" x2="8.12" y1="4" y2="15.88" />
        <line x1="14.47" x2="20" y1="14.48" y2="20" />
        <line x1="8.12" x2="12" y1="8.12" y2="12" />
      </symbol>
      <symbol id="lucide-sparkles" viewBox="0 0 24 24">
        <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
        <path d="M5 3v4" />
        <path d="M19 17v4" />
        <path d="M3 5h4" />
        <path d="M17 19h4" />
      </symbol>
      <symbol id="lucide-shield-check" viewBox="0 0 24 24">
        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
        <path d="m9 12 2 2 4-4" />
      </symbol>
      <symbol id="lucide-clock" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10" />
        <polyline points="12 6 12 12 16 14" />
      </symbol>
      <symbol id="lucide-armchair" viewBox="0 0 24 24">
        <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
        <path d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
        <path d="M5 18v2" />
        <path d="M19 18v2" />
      </symbol>
      <symbol id="lucide-phone" viewBox="0 0 24 24">
        <path
          d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
      </symbol>
      <symbol id="lucide-map-pin" viewBox="0 0 24 24">
        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
        <circle cx="12" cy="10" r="3" />
      </symbol>
      <symbol id="lucide-menu" viewBox="0 0 24 24">
        <line x1="4" x2="20" y1="12" y2="12" />
        <line x1="4" x2="20" y1="6" y2="6" />
        <line x1="4" x2="20" y1="18" y2="18" />
      </symbol>
      <symbol id="lucide-x" viewBox="0 0 24 24">
        <path d="M18 6 6 18" />
        <path d="m6 6 12 12" />
      </symbol>
      <symbol id="brand-whatsapp" viewBox="0 0 24 24" fill="currentColor" stroke="none">
        <path
          d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
      </symbol>
    </defs>
  </svg>



  <!-- =====================================================
       SITE HEADER (Modeled on SWOT Gadgets clean header)
       ===================================================== -->
  <header class="site-header" id="top">
    <nav class="nav wrap" aria-label="Main navigation">
      <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" class="brand-logo-img" width="40" height="40" />
        <div class="brand-text">
          <span class="brand-title"><?php bloginfo('name'); ?></span>
          <span class="brand-sub">UNISEX SALON · UYO</span>
        </div>
      </a>

      <div class="nav-links" id="nav-links">
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#lookbook">Lookbook</a>
        <a href="#solutions">Solutions</a>
        <a href="#why-us">Why Us</a>
        <a href="#reviews">Reviews</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="nav-actions">
        <a class="button nav-whatsapp" aria-label="Chat with Paso Elite on WhatsApp"
          href="https://wa.me/<?php echo esc_attr($whatsapp); ?>"
          data-whatsapp="Hello Paso Elite! I would like to book a session at your salon.">
          <svg class="brand-icon" aria-hidden="true" focusable="false">
            <use href="#brand-whatsapp" />
          </svg>
          <span><?php echo esc_html($phone); ?></span>
        </a>
        <a class="button button-primary nav-book-cta" href="#appointment">
          Book Session
        </a>
        <button class="menu-toggle" id="menuToggle" aria-label="Open navigation" aria-controls="nav-links"
          aria-expanded="false">
          <svg aria-hidden="true" focusable="false">
            <use href="#lucide-menu" />
          </svg>
        </button>
      </div>
    </nav>
  </header>

  <main id="main">
