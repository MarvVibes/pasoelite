<?php
/**
 * Template part: Solutions / Lifestyle Section (Modeled on SWOT Solutions)
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';
?>
<section class="section wrap" id="solutions">
  <div class="section-heading">
    <div>
      <p class="eyebrow">TAILORED FOR UYO PROFESSIONALS &amp; FAMILIES</p>
      <h2>
        Your occasion.<br />
        The perfect finish.
      </h2>
    </div>
    <p>
      Tell us your schedule and your occasion.<br class="desktop-break" />
      We'll pair you with the master stylist who specializes in your exact look.
    </p>
  </div>

  <div class="solutions-layout">
    <!-- Featured Lifestyle Photo on the Left like SWOT -->
    <div class="solution-photo">
      <img src="<?php echo esc_url($img_dir . 'female braids 2.jpeg'); ?>" alt="Paso Elite Unisex Salon Sanctuary at No 6 Itu Road, Uyo" decoding="async" />
      <div>
        <span class="eyebrow">A SANCTUARY OF CONFIDENCE</span>
        <h3>
          Flawless styles.<br />
          Zero hassle.
        </h3>
      </div>
    </div>

    <!-- Clean Interactive List on the Right like SWOT -->
    <div class="solution-list">
      <a href="#appointment" data-intent="Corporate Grooming">
        <div>
          <h3>Corporate &amp; Executive Grooming</h3>
          <p>Sharp, dignified skin tapers and hot towel beard shaping tailored for boardrooms.</p>
        </div>
        <span>
          Reserve chair
          <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
        </span>
      </a>

      <a href="#appointment" data-intent="Bridal Styling">
        <div>
          <h3>Bridal &amp; Milestone Celebrations</h3>
          <p>Glamorous frontal installations, elaborate updos, and glowing camera-ready styling.</p>
        </div>
        <span>
          Reserve chair
          <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
        </span>
      </a>

      <a href="#appointment" data-intent="Protective Braids">
        <div>
          <h3>Protective Knotless &amp; Box Braids</h3>
          <p>Featherweight parting, painless tension, and long-lasting scalp protection.</p>
        </div>
        <span>
          Reserve chair
          <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
        </span>
      </a>

      <a href="#appointment" data-intent="Kids Styling">
        <div>
          <h3>Gentle &amp; Patient Kids Styling</h3>
          <p>A calm, tear-free atmosphere with friendly stylists who make hair day fun for kids.</p>
        </div>
        <span>
          Reserve chair
          <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
        </span>
      </a>

      <a href="#appointment" data-intent="VIP Call-Out">
        <div>
          <h3>VIP Home &amp; Hotel Call-Outs</h3>
          <p>Exclusive private grooming and styling sessions at your residence or hotel in Uyo.</p>
        </div>
        <span>
          Reserve chair
          <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
        </span>
      </a>

      <a href="#appointment" data-intent="Scalp Care">
        <div>
          <h3>Weekend Scalp &amp; Beard Detox</h3>
          <p>Deep steam treatments, exfoliating scrubs, and hot towel relaxation.</p>
        </div>
        <span>
          Reserve chair
          <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
        </span>
      </a>
    </div>
  </div>
</section>
