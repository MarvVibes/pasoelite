<?php
/**
 * Template part: Appointment Booking Section (Modeled on SWOT Gadgets #enquiry)
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$whatsapp = paso_get_whatsapp();
$phone    = paso_get_phone();
?>
<section class="section enquiry-section" id="appointment">
  <div class="wrap enquiry-layout">
    <div class="enquiry-copy">
      <p class="eyebrow">FAST ONLINE RESERVATIONS</p>
      <h2>
        Reserve your<br />
        chair in<br />
        <span>seconds.</span>
      </h2>
      <p>
        Choose your preferred styling service, pick your date and time, and our team
        will prepare your chair at No 6 Itu Road, Uyo. Zero long queues.
      </p>

      <div class="enquiry-note">
        <svg class="brand-icon" aria-hidden="true" focusable="false">
          <use href="#brand-whatsapp" />
        </svg>
        <div>
          <h3>More of a WhatsApp person?</h3>
          <a class="text-link" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>"
            data-whatsapp="Hello Paso Elite! I'd like to book an appointment directly.">
            <span>Chat directly on WhatsApp (<?php echo esc_html($phone); ?>)</span>
            <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-right" /></svg>
          </a>
        </div>
      </div>
    </div>

    <form id="bookingForm" class="enquiry-form" aria-label="Appointment booking">
      <div class="form-top">
        <h3>Tell us your details.</h3>
        <span>* Required</span>
      </div>

      <div class="form-grid">
        <label>
          Your Name *
          <input name="name" id="bookName" autocomplete="name" required maxlength="100" placeholder="e.g. Samuel Effiong" />
        </label>

        <label>
          Phone / WhatsApp Number *
          <input name="phone" id="bookPhone" type="tel" autocomplete="tel" required maxlength="25"
            placeholder="e.g. 0701 498 7308" />
        </label>

        <label>
          Service Needed *
          <select name="service" id="bookService" required>
            <option value="">Select a service</option>
            <option value="Men's Signature Cut & Shave">Men's Signature Haircut &amp; Shave</option>
            <option value="Executive Fade & Beard Sculpting">Executive Fade &amp; Beard Sculpting</option>
            <option value="Couture Knotless Braids">Couture Knotless Braids</option>
            <option value="HD Lace Frontal / Closure Install">HD Lace Frontal / Closure Install</option>
            <option value="Wig Revamping & Styling">Wig Revamping &amp; Styling</option>
            <option value="Gentle Kids Cut or Braiding">Gentle Kids Cut or Braiding</option>
            <option value="Spa Pedicure & Facial Detox">Spa Pedicure &amp; Facial Detox</option>
            <option value="Luxury Gel Manicure & Nail Art">Luxury Gel Manicure &amp; Nail Art</option>
            <option value="Hair Coloring / Tinting">Hair Coloring / Custom Tinting</option>
            <option value="Other Custom Request">Other Custom Request</option>
          </select>
        </label>

        <label>
          Preferred Date *
          <input name="date" id="bookDate" type="date" required />
        </label>

        <label>
          Preferred Time *
          <select name="time" id="bookTime" required>
            <option value="">Choose arrival time</option>
            <option value="Morning (8:00 AM - 11:00 AM)">Morning (8:00 AM - 11:00 AM)</option>
            <option value="Midday (11:00 AM - 2:00 PM)">Midday (11:00 AM - 2:00 PM)</option>
            <option value="Afternoon (2:00 PM - 5:00 PM)">Afternoon (2:00 PM - 5:00 PM)</option>
            <option value="Evening (5:00 PM - 8:30 PM)">Evening (5:00 PM - 8:30 PM)</option>
          </select>
        </label>

        <label class="full">
          Special Requests or Style Notes
          <textarea name="details" id="bookDetails" rows="3" maxlength="1000"
            placeholder="Mention any specific hairstyle details, if you're bringing an inspiration photo, or if you require VIP call-out..."></textarea>
        </label>
      </div>

      <button class="button button-primary form-submit" type="submit" id="bookSubmitBtn">
        <span>Confirm &amp; Open on WhatsApp</span>
        <svg aria-hidden="true" focusable="false">
          <use href="#lucide-arrow-right" />
        </svg>
      </button>

      <p class="form-hint">
        We'll format your appointment and open WhatsApp so our team can confirm your chair instantly.
      </p>

      <div id="bookingStatus" class="form-status" hidden>
        <svg class="status-icon" aria-hidden="true" focusable="false">
          <use href="#lucide-circle-check" />
        </svg>
        <h3>Your appointment request is prepared!</h3>
        <p>Tap below to send it to our team on WhatsApp (<?php echo esc_html($phone); ?>) to lock in your chair.</p>
        <a id="whatsappProceedLink" class="button button-primary" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener">
          <svg class="brand-icon" aria-hidden="true" focusable="false"><use href="#brand-whatsapp" /></svg>
          <span>Continue on WhatsApp</span>
          <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-right" /></svg>
        </a>
      </div>
    </form>
  </div>
</section>
