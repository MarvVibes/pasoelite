<?php
/**
 * Template part: Inspiration Photo CTA Banner (Modeled on SWOT Gadgets Device CTA banner)
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$whatsapp = paso_get_whatsapp();
?>
<section class="device-cta" aria-labelledby="cta-title">
  <div>
    <p class="device-cta-eyebrow">HAVE A SPECIFIC HAIRSTYLE IN MIND?</p>
    <h3 id="cta-title">Have an inspiration photo? Send it to us.</h3>
    <p>
      Saw a trendy haircut or braid on Instagram or Pinterest? Send the screenshot to our master stylists on WhatsApp.
      We'll confirm prep time and reserve your chair immediately.
    </p>
  </div>
  <a class="button device-cta-button" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>"
    data-whatsapp="Hello Paso Elite! I have a hairstyle photo I'd like to recreate. Can I send it to you?">
    <svg class="brand-icon" aria-hidden="true" focusable="false">
      <use href="#brand-whatsapp" />
    </svg>
    <span>Send inspiration photo</span>
    <svg aria-hidden="true" focusable="false">
      <use href="#lucide-arrow-up-right" />
    </svg>
  </a>
</section>
