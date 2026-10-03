<?php
/**
 * Template part: Categories Section (Modeled on SWOT Category Grid)
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';
?>
<section class="section wrap" id="services">
  <div class="section-heading">
    <div>
      <p class="eyebrow">EXPLORE OUR SIGNATURE CRAFT</p>
      <h2>
        Precision cuts.<br />
        Couture styles. Zero wait.
      </h2>
    </div>
    <p>
      From razor-sharp skin fades and sculpted beard treatments<br class="desktop-break" />
      to bespoke lace fixing, goddess braids, and therapeutic scalp care.
    </p>
  </div>

  <!-- 3 Large Category Showcase Tiles (1.4fr 1fr 1fr like SWOT) -->
  <div class="category-grid">
    <a class="category category-men" href="#lookbook" data-category="Men's Cuts">
      <img src="<?php echo esc_url($img_dir . 'men cut 2.jpeg'); ?>" alt="Men's Precision Fades and Beard Sculpting" decoding="async" />
      <div>
        <span>EXECUTIVE &amp; CORPORATE GROOMING</span>
        <h3>Men's Cuts</h3>
        <p>Signature fades, hot towel razor line-ups, beard care &amp; scalp treatments.</p>
      </div>
      <span class="round-arrow">
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
      </span>
    </a>

    <a class="category category-women" href="#lookbook" data-category="Braids">
      <img src="<?php echo esc_url($img_dir . 'wig installation.jpeg'); ?>" alt="Couture Hair Braiding & Wigs" decoding="async" />
      <div>
        <span>COUTURE BRAIDS &amp; WEAVES</span>
        <h3>Braids &amp; Wigs</h3>
        <p>Painless knotless, bohemian cornrows, frontal installations &amp; wig styling.</p>
      </div>
      <span class="round-arrow">
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
      </span>
    </a>

    <a class="category category-spa" href="#lookbook" data-category="Spa & Care">
      <img src="<?php echo esc_url($img_dir . 'Nail fix.jpeg'); ?>" alt="Luxury Spa & Pedicure" decoding="async" />
      <div>
        <span>PAMPERING &amp; REVIVAL</span>
        <h3>Spa &amp; Grooming</h3>
        <p>Exfoliating pedicure, head massage, facial detox &amp; hair texturizing.</p>
      </div>
      <span class="round-arrow">
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
      </span>
    </a>
  </div>

  <!-- Quick category pills like SWOT's .category-small -->
  <div class="category-small" aria-label="More salon services">
    <a href="#lookbook" data-filter="Men's Cuts">
      <svg class="category-icon" aria-hidden="true" focusable="false"><use href="#lucide-scissors" /></svg>
      Men's Fades
      <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
    </a>
    <a href="#lookbook" data-filter="Braids">
      <svg class="category-icon" aria-hidden="true" focusable="false"><use href="#lucide-sparkles" /></svg>
      Knotless Braids
      <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
    </a>
    <a href="#lookbook" data-filter="Fixing & Wigs">
      <svg class="category-icon" aria-hidden="true" focusable="false"><use href="#lucide-sparkles" /></svg>
      Lace Fixing
      <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
    </a>
    <a href="#lookbook" data-filter="Kids Cuts">
      <svg class="category-icon" aria-hidden="true" focusable="false"><use href="#lucide-scissors" /></svg>
      Kids Styling
      <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
    </a>
    <a href="#lookbook" data-filter="Spa & Care">
      <svg class="category-icon" aria-hidden="true" focusable="false"><use href="#lucide-armchair" /></svg>
      Spa Pedicure
      <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
    </a>
    <a href="#lookbook" data-filter="Spa & Care">
      <svg class="category-icon" aria-hidden="true" focusable="false"><use href="#lucide-shield-check" /></svg>
      Scalp Detox
      <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
    </a>
  </div>
</section>
