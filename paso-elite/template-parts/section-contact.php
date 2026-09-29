<?php
/**
 * Template part: Contact & Location Section (Modeled on SWOT Contact Grid)
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$phone       = paso_get_phone();
$whatsapp    = paso_get_whatsapp();
$email       = paso_get_email();
$address     = paso_get_address();
$hours_week  = paso_get_hours_weekdays();
$hours_sun   = paso_get_hours_sunday();
?>
<section class="section wrap contact-section" id="contact">
  <div class="section-heading">
    <div>
      <p class="eyebrow">WALK-IN STUDIO &amp; PRIVATE SESSIONS</p>
      <h2>
        Visit our studio in Uyo.<br />
        Or book an executive call-out.
      </h2>
    </div>
    <a class="button button-outline" href="#appointment">
      <span>Book an appointment</span>
      <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-right" /></svg>
    </a>
  </div>

  <div class="contact-grid">
    <div>
      <span class="eyebrow">PHYSICAL SALON IN UYO</span>
      <h3><?php bloginfo('name'); ?></h3>
      <address>
        <?php echo nl2br(esc_html($address)); ?>
      </address>
      <a class="text-link" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>?text=Hello%20Paso%20Elite!%20Can%20you%20share%20directions%20to%20your%20salon%20at%20No%206%20Itu%20Road?" target="_blank" rel="noopener">
        <span>Get directions on WhatsApp</span>
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
      </a>
    </div>

    <div>
      <span class="eyebrow">DIRECT CALLS &amp; WHATSAPP</span>
      <a class="contact-phone" href="tel:<?php echo esc_attr($phone); ?>">
        <svg aria-hidden="true" focusable="false"><use href="#lucide-phone" /></svg>
        <span><?php echo esc_html($phone); ?></span>
      </a>
      <a class="text-link" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>"
        data-whatsapp="Hello Paso Elite! I'd like to make an enquiry or book an appointment.">
        <svg class="brand-icon" aria-hidden="true" focusable="false"><use href="#brand-whatsapp" /></svg>
        <span>Chat on WhatsApp</span>
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
      </a>
    </div>

    <div>
      <span class="eyebrow">WORKING HOURS &amp; EMAIL</span>
      <div class="hours-block">
        <p><strong><?php echo esc_html($hours_week); ?></strong></p>
        <p><strong><?php echo esc_html($hours_sun); ?></strong></p>
      </div>
      <a class="text-link" href="mailto:<?php echo esc_attr($email); ?>">
        <span><?php echo esc_html($email); ?></span>
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
      </a>
    </div>
  </div>
</section>
