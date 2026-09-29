<?php
/**
 * Footer template for Paso Elite Theme
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$phone        = paso_get_phone();
$whatsapp     = paso_get_whatsapp();
$address      = paso_get_address();
$slogan       = paso_get_slogan();
$default_logo = get_template_directory_uri() . '/assets/images/real_logo.jpg';
$logo_url     = has_custom_logo() ? wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full') : $default_logo;
?>
  </main>

  <!-- =====================================================
       SITE FOOTER (SWOT Gadgets clean footer)
       ===================================================== -->
  <footer class="site-footer wrap">
    <div>
      <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" width="38" height="38" loading="lazy" />
        <div class="brand-text">
          <span class="brand-title"><?php bloginfo('name'); ?></span>
          <span class="brand-sub">UNISEX SALON · UYO</span>
        </div>
      </a>
      <p>
        <?php echo esc_html($slogan); ?>. Precision grooming, couture braids &amp; luxury salon care in Uyo.
      </p>
    </div>

    <nav aria-label="Footer navigation">
      <?php
      if (has_nav_menu('footer')) {
          wp_nav_menu(array(
              'theme_location' => 'footer',
              'container'      => false,
              'depth'          => 1,
              'fallback_cb'    => false,
          ));
      } else {
      ?>
      <a href="#services">Services</a>
      <a href="#lookbook">Lookbook</a>
      <a href="#solutions">Solutions</a>
      <a href="#why-us">Why Us</a>
      <a href="#reviews">Reviews</a>
      <a href="#contact">Contact</a>
      <?php } ?>
    </nav>

    <div class="footer-bottom">
      <span>&copy; <span id="year"><?php echo date('Y'); ?></span> <?php bloginfo('name'); ?>. <?php echo esc_html($address); ?>.</span>
      <span>Great confidence starts with a well-groomed look.</span>
    </div>
  </footer>

  <!-- Floating WhatsApp Widget (Modeled on SWOT Gadgets widget) -->
  <aside class="whatsapp-widget" aria-label="WhatsApp quick booking">
    <div class="widget-popover" id="widgetPopover">
      <p>Need to reserve a chair or check style availability?</p>
      <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>"
        data-whatsapp="Hello Paso Elite! I'd like to check style availability and book an appointment.">
        <svg class="brand-icon" aria-hidden="true" focusable="false"><use href="#brand-whatsapp" /></svg>
        <span>Chat with our team</span>
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-right" /></svg>
      </a>
    </div>
    <a class="widget-button" aria-label="Chat with Paso Elite on WhatsApp"
      href="https://wa.me/<?php echo esc_attr($whatsapp); ?>"
      data-whatsapp="Hello Paso Elite! I would like to book a session at your salon.">
      <svg class="brand-icon" aria-hidden="true" focusable="false"><use href="#brand-whatsapp" /></svg>
    </a>
  </aside>

  <?php wp_footer(); ?>
</body>

</html>
