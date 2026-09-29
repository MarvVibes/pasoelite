<?php
/**
 * The template for displaying the front page
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

// Section 1: Hero, Trust Strip & Brand Marquee
get_template_part('template-parts/section', 'hero');

// Section 2: About Us (Vision, Philosophy & Architecture of Grooming)
get_template_part('template-parts/section', 'about');

// Section 3: Categories & Signatures (SWOT Category Grid)
get_template_part('template-parts/section', 'categories');

// Section 4: Filterable Lookbook (Custom Post Types or Authentic Curated Catalog)
get_template_part('template-parts/section', 'lookbook');

// Section 5: Solutions / Occasion Styling
get_template_part('template-parts/section', 'solutions');

// Section 6: Why Choose Us (Light Luxury Editorial Pillars)
get_template_part('template-parts/section', 'why-us');

// Section 7: Verified Client Reviews
get_template_part('template-parts/section', 'reviews');

// Section 8: Fast Appointment Booking Form
get_template_part('template-parts/section', 'appointment');

// Section 9: Studio Location & Direct Contact
get_template_part('template-parts/section', 'contact');

get_footer();
