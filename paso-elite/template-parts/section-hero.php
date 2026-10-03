<?php
/**
 * Template part: Hero Section, Trust Strip, and Brand Marquee
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$whatsapp       = paso_get_whatsapp();
$hero_eyebrow   = get_theme_mod('paso_hero_eyebrow', 'ITU ROAD · UYO, NIGERIA · BESPOKE UNISEX SALON');
$hero_headline  = get_theme_mod('paso_hero_headline', 'A place where good look meets confidence.');
$hero_desc      = get_theme_mod('paso_hero_description', 'Whether you\'re closing deals, attending an event, preparing for your wedding, or refreshing your signature look—experience precision fades, couture braids, flawless frontal fixing, and organic scalp care at No 6 Itu Road, Uyo.');
$custom_hero_img = get_theme_mod('paso_hero_image');
$default_hero_img = get_template_directory_uri() . '/assets/images/men cut 2.jpeg';
$hero_img       = !empty($custom_hero_img) ? $custom_hero_img : $default_hero_img;
?>
<!-- =====================================================
     HERO SECTION (Modeled on SWOT Gadgets Hero)
     ===================================================== -->
<section class="hero wrap" aria-labelledby="hero-title">
  <div class="hero-copy">
    <h1 id="hero-title">
      <?php echo nl2br(esc_html($hero_headline)); ?>
    </h1>
    <p class="hero-description">
      <?php echo esc_html($hero_desc); ?>
    </p>
    <div class="actions">
      <a class="button button-primary" href="#appointment">
        Reserve Your Chair
        <svg aria-hidden="true" focusable="false">
          <use href="#lucide-arrow-right" />
        </svg>
      </a>
      <a class="button button-outline" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>"
        data-whatsapp="Hello Paso Elite! I would like to inquire about booking an appointment today.">
        <svg class="brand-icon" aria-hidden="true" focusable="false">
          <use href="#brand-whatsapp" />
        </svg>
        Chat on WhatsApp
      </a>
    </div>
    <p class="hero-trust">
      <span>Men • Women • Kids</span>
      <i></i>
      <span>100% Sterile Blades • Zero-Wait Guarantee • No 6 Itu Road, Uyo</span>
    </p>
  </div>

  <!-- Hero Visual Showcase -->
  <figure class="hero-visual">
    <div class="orbit"></div>
    <div class="orbit orbit-two"></div>
    <div class="hero-art">
      <img src="<?php echo esc_url($hero_img); ?>" alt="Paso Elite Precision Men's Taper and Razor Sculpting in Uyo"
        fetchpriority="high" id="heroMainImage" />
    </div>
    <div class="art-label label-top">
      <svg aria-hidden="true" focusable="false"><use href="#lucide-sparkles" /></svg>
      <span>SIGNATURE CRAFT · UYO</span>
    </div>
    <div class="art-label label-bottom">
      <svg aria-hidden="true" focusable="false"><use href="#lucide-shield-check" /></svg>
      <span>100% STERILE UV TOOLS</span>
    </div>
    <span class="art-coordinate">05.0377° N, 07.9128° E · ITU RD</span>
  </figure>
</section>

<!-- =====================================================
     TRUST STRIP
     ===================================================== -->
<div class="trust-strip">
  <div class="wrap">
    <span>
      <svg aria-hidden="true" focusable="false"><use href="#lucide-scissors" /></svg>
      <strong>10+ years</strong> styling Uyo's elite
    </span>
    <span>
      <svg aria-hidden="true" focusable="false"><use href="#lucide-shield-check" /></svg>
      100% single-use sterile blades
    </span>
    <span>
      <svg aria-hidden="true" focusable="false"><use href="#lucide-armchair" /></svg>
      Executive VIP lounge &amp; refreshments
    </span>
    <span>
      <svg aria-hidden="true" focusable="false"><use href="#lucide-map-pin" /></svg>
      No 6 Itu Road, Uyo (Easy Parking)
    </span>
  </div>
</div>

<!-- =====================================================
     BRAND MARQUEE
     ===================================================== -->
<section class="brands-marquee-section" aria-label="Professional Salon Products">
  <div class="brands-marquee-header">
    <p class="eyebrow brands-eyebrow">
      PREMIUM FORMULAS &amp; PROFESSIONAL SALON GEAR
    </p>
  </div>
  <div class="brands-marquee-container" tabindex="0" role="region" aria-label="Brand Logos Carousel">
    <div class="brands-marquee-track">
      <div class="brand-item">L'ORÉAL PROFESSIONNEL</div>
      <div class="brand-item">WAHL PROFESSIONAL</div>
      <div class="brand-item">CANTU BEAUTY</div>
      <div class="brand-item">BABYLISSPRO</div>
      <div class="brand-item">OLAPLEX</div>
      <div class="brand-item">SHEAMOISTURE</div>
      <div class="brand-item">ANDIS USA</div>
      <div class="brand-item">MIZANI</div>
      <div class="brand-item">DARK &amp; LOVELY</div>
      <div class="brand-item">DYSON HAIR</div>
    </div>
    <div class="brands-marquee-track" aria-hidden="true">
      <div class="brand-item">L'ORÉAL PROFESSIONNEL</div>
      <div class="brand-item">WAHL PROFESSIONAL</div>
      <div class="brand-item">CANTU BEAUTY</div>
      <div class="brand-item">BABYLISSPRO</div>
      <div class="brand-item">OLAPLEX</div>
      <div class="brand-item">SHEAMOISTURE</div>
      <div class="brand-item">ANDIS USA</div>
      <div class="brand-item">MIZANI</div>
      <div class="brand-item">DARK &amp; LOVELY</div>
      <div class="brand-item">DYSON HAIR</div>
    </div>
  </div>
</section>
