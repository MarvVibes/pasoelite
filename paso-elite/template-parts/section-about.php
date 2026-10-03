<?php
/**
 * Template part: About Us Section
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$whatsapp   = paso_get_whatsapp();
$headline   = get_theme_mod('paso_about_headline', 'Where good looks meet unshakable confidence.');
$p1         = get_theme_mod('paso_about_p1', 'Paso Elite Unisex Salon was established with the vision to provide exceptional beauty and grooming services in a professional, comfortable, and welcoming environment at No 6 Itu Road, Uyo.');
$p2         = get_theme_mod('paso_about_p2', 'At Paso Elite, we believe beauty and looking good is more than just appearance—it\'s about confidence, self-expression, and feeling good about yourself. Whether you are coming in for a fresh haircut, a new hairstyle, flawless nails, or a complete beauty transformation, we strive to make every visit worth remembering.');
$about_img  = get_template_directory_uri() . '/assets/images/real_guy_barbing.jpg';
?>
<!-- =====================================================
     ABOUT US SECTION (From Brand Details Document)
     ===================================================== -->
<section class="section wrap about-section" id="about" aria-labelledby="about-title">
  <div class="about-grid">
    <div class="about-copy">
      <p class="eyebrow">ABOUT PASO ELITE · UYO, NIGERIA</p>
      <h2 id="about-title">
        <?php echo esc_html($headline); ?>
      </h2>
      <p class="about-lead">
        <?php echo esc_html($p1); ?>
      </p>
      <blockquote class="about-quote">
        "<?php echo esc_html($p2); ?>"
      </blockquote>
      <p>
        We serve a diverse range of clients across Akwa Ibom State—including students, professionals, residents, and visitors in Uyo—with an unwavering commitment to professionalism, excellent customer service, and beautiful results.
      </p>
      <p>
        Personal grooming is an intimate architectural art. Paso Elite unites master barbers, couture colorists, and proactive hair sculptors under one roof. Every service is unhurried, hygienic, and tailored with precision.
      </p>
      <div class="about-actions">
        <a class="button button-primary" href="#appointment">
          Reserve Your Chair
          <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-right" /></svg>
        </a>
        <a class="button button-outline" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>"
          data-whatsapp="Hello Paso Elite! I'd like to ask a few questions about your salon services.">
          <svg class="brand-icon" aria-hidden="true" focusable="false"><use href="#brand-whatsapp" /></svg>
          Inquire on WhatsApp
        </a>
      </div>
    </div>

    <div class="about-visuals">
      <div class="about-image-card">
        <img src="<?php echo esc_url($about_img); ?>" alt="Paso Elite Salon Environment and Stations at No 6 Itu Road, Uyo" decoding="async" />
        <div class="about-image-overlay">
          <span class="eyebrow">NO 6 ITU ROAD · UYO</span>
          <h3>Executive Grooming Sanctuary</h3>
        </div>
      </div>
      <div class="about-stats-row">
        <div class="about-stat">
          <span class="stat-num">10+</span>
          <span class="stat-label">Years of earned client trust in Uyo</span>
        </div>
        <div class="about-stat">
          <span class="stat-num">100%</span>
          <span class="stat-label">Hospital-grade sterile blades &amp; UV care</span>
        </div>
        <div class="about-stat">
          <span class="stat-num">All-in-1</span>
          <span class="stat-label">Men, Women &amp; Kids unisex styling suite</span>
        </div>
      </div>
    </div>
  </div>
</section>
