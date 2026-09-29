<?php
/**
 * Template part: Why Choose Us (Light Luxury Editorial Layout)
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';
$slogan  = paso_get_slogan();
?>
<section class="section wrap why-us-light" id="why-us" aria-labelledby="why-title">
  <div class="section-heading">
    <div>
      <p class="eyebrow">WHY CHOOSE PASO ELITE SALON</p>
      <h2 id="why-title">
        Crafted for your confidence.<br />
        <span>Never an unpleasant chore.</span>
      </h2>
    </div>
    <p>
      In a city crowded with noisy barber shops, unsterilized tools, painful braiding, and endless waiting—Paso Elite was built to be your serene sanctuary at No 6 Itu Road, Uyo.
    </p>
  </div>

  <!-- 5 Editorial Pillars with Authentic Visual Representations -->
  <div class="why-cards-grid">
    <!-- Pillar 1 -->
    <article class="why-card">
      <div class="why-card-thumb">
        <img src="<?php echo esc_url($img_dir . 'IMG-20260918-WA0036.jpg.jpeg'); ?>" alt="Paso Elite Premium and Professional Salon Experience in Uyo" loading="lazy" />
        <span class="why-pill">VIP COMFORT</span>
      </div>
      <div class="why-card-body">
        <h3>Premium &amp; Professional Salon Experience</h3>
        <p>Air-conditioned private styling suites, high-speed Wi-Fi, chilled refreshments, and dedicated unhurried attention from start to finish.</p>
      </div>
    </article>

    <!-- Pillar 2 -->
    <article class="why-card">
      <div class="why-card-thumb">
        <img src="<?php echo esc_url($img_dir . 'IMG-20260916-WA0016.jpg.jpeg'); ?>" alt="Master Stylists and Precision Barbering at Paso Elite" loading="lazy" />
        <span class="why-pill">MASTER ARTISANS</span>
      </div>
      <div class="why-card-body">
        <h3>Skilled &amp; Creative Beauty Professionals</h3>
        <p>Decades of master craft. Stylists who understand facial profiles, intricate hair textures, healthy scalp care, and trendsetting cuts.</p>
      </div>
    </article>

    <!-- Pillar 3 -->
    <article class="why-card">
      <div class="why-card-thumb">
        <img src="<?php echo esc_url($img_dir . 'IMG-20260918-WA0042.jpg.jpeg'); ?>" alt="Clean and Welcoming Salon Environment with Hospital-Grade Sterilization" loading="lazy" />
        <span class="why-pill">100% STERILE &amp; SAFE</span>
      </div>
      <div class="why-card-body">
        <h3>Clean, Comfortable &amp; Welcoming Environment</h3>
        <p>Hospital-grade UV sterilization cabinets, sealed single-use razor blades for every client, and spotless luxury wash basins.</p>
      </div>
    </article>

    <!-- Pillar 4 -->
    <article class="why-card">
      <div class="why-card-thumb">
        <img src="<?php echo esc_url($img_dir . 'IMG-20260918-WA0022.jpg.jpeg'); ?>" alt="Attention to Details and Customer Satisfaction" loading="lazy" />
        <span class="why-pill">SURGICAL PRECISION</span>
      </div>
      <div class="why-card-body">
        <h3>Attention to Details &amp; Customer Satisfaction</h3>
        <p>Painless tension-free parting, symmetrical hair alignment, razor-sharp perimeter tapers, and finishes built to last without headache.</p>
      </div>
    </article>

    <!-- Pillar 5 -->
    <article class="why-card">
      <div class="why-card-thumb">
        <img src="<?php echo esc_url($img_dir . 'IMG-20260918-WA0046.jpg.jpeg'); ?>" alt="Bespoke Grooming Tailored to Personal Style" loading="lazy" />
        <span class="why-pill">PERSONAL STYLE</span>
      </div>
      <div class="why-card-body">
        <h3>Tailored to Your Personal Style</h3>
        <p>Whether you need board-ready executive grooming, bridal glamour, or casual flair, your service is customized to your personal identity.</p>
      </div>
    </article>
  </div>

  <!-- Experience Trust Bar on Warm White/Cream -->
  <div class="why-trust-banner">
    <div class="trust-badge-group">
      <span class="trust-badge-num">10+</span>
      <div>
        <strong>YEARS OF EXCELLENCE IN UYO</strong>
        <span><?php echo esc_html($slogan); ?>.</span>
      </div>
    </div>
    <div class="trust-action-group">
      <p>Over a decade of earned client trust across Akwa Ibom State.</p>
      <a class="button button-primary" href="#appointment">
        Reserve Your Chair
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-right" /></svg>
      </a>
    </div>
  </div>
</section>
