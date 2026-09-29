<?php
/**
 * Paso Elite Theme Customizer Settings
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

function paso_elite_customize_register($wp_customize) {
    // -------------------------------------------------------------
    // Panel: Paso Elite Salon Settings
    // -------------------------------------------------------------
    $wp_customize->add_panel('paso_elite_settings_panel', array(
        'title'       => __('Paso Elite Salon Settings', 'paso-elite'),
        'description' => __('Manage salon phone numbers, WhatsApp, address, hero texts, and branding.', 'paso-elite'),
        'priority'    => 20,
    ));

    // -------------------------------------------------------------
    // Section 1: Contact & Location Details
    // -------------------------------------------------------------
    $wp_customize->add_section('paso_elite_contact_section', array(
        'title'    => __('Contact & Location', 'paso-elite'),
        'panel'    => 'paso_elite_settings_panel',
        'priority' => 10,
    ));

    // Phone Number
    $wp_customize->add_setting('paso_phone', array(
        'default'           => '07014987308',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_phone', array(
        'label'       => __('Phone Number (Calls)', 'paso-elite'),
        'section'     => 'paso_elite_contact_section',
        'type'        => 'text',
        'description' => __('Official salon phone line shown across the site.', 'paso-elite'),
    ));

    // WhatsApp Number
    $wp_customize->add_setting('paso_whatsapp', array(
        'default'           => '2347014987308',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_whatsapp', array(
        'label'       => __('WhatsApp Number (International format)', 'paso-elite'),
        'section'     => 'paso_elite_contact_section',
        'type'        => 'text',
        'description' => __('e.g. 2347014987308 (without the + sign) for direct WhatsApp click-to-chat links.', 'paso-elite'),
    ));

    // Email
    $wp_customize->add_setting('paso_email', array(
        'default'           => 'Pasoeliteunisexsalon@gmail.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_email', array(
        'label'   => __('Email Address', 'paso-elite'),
        'section' => 'paso_elite_contact_section',
        'type'    => 'email',
    ));

    // Address
    $wp_customize->add_setting('paso_address', array(
        'default'           => 'No 6 Itu Road, Uyo, Akwa Ibom State, Nigeria',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_address', array(
        'label'   => __('Physical Salon Address', 'paso-elite'),
        'section' => 'paso_elite_contact_section',
        'type'    => 'textarea',
    ));

    // Opening Hours (Weekdays)
    $wp_customize->add_setting('paso_hours_weekdays', array(
        'default'           => 'Monday – Saturday: 8:00 AM – 9:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_hours_weekdays', array(
        'label'   => __('Weekday Working Hours', 'paso-elite'),
        'section' => 'paso_elite_contact_section',
        'type'    => 'text',
    ));

    // Opening Hours (Sundays)
    $wp_customize->add_setting('paso_hours_sunday', array(
        'default'           => 'Sunday: 12:00 PM – 7:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_hours_sunday', array(
        'label'   => __('Sunday Working Hours', 'paso-elite'),
        'section' => 'paso_elite_contact_section',
        'type'    => 'text',
    ));

    // Google Maps Embed / Link
    $wp_customize->add_setting('paso_maps_link', array(
        'default'           => 'https://maps.google.com/?q=No+6+Itu+Road+Uyo+Akwa+Ibom',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_maps_link', array(
        'label'   => __('Google Maps URL', 'paso-elite'),
        'section' => 'paso_elite_contact_section',
        'type'    => 'url',
    ));

    // -------------------------------------------------------------
    // Section 2: Brand Identity & Announcement Bar
    // -------------------------------------------------------------
    $wp_customize->add_section('paso_elite_brand_section', array(
        'title'    => __('Brand & Announcement Bar', 'paso-elite'),
        'panel'    => 'paso_elite_settings_panel',
        'priority' => 15,
    ));

    // Slogan
    $wp_customize->add_setting('paso_slogan', array(
        'default'           => 'A place where good look meets confidence',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_slogan', array(
        'label'       => __('Brand Slogan', 'paso-elite'),
        'section'     => 'paso_elite_brand_section',
        'type'        => 'text',
        'description' => __('Official slogan displayed in the preloader and footer.', 'paso-elite'),
    ));

    // Enable Announcement Bar
    $wp_customize->add_setting('paso_show_announcement', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_show_announcement', array(
        'label'   => __('Show Announcement Bar at top of site', 'paso-elite'),
        'section' => 'paso_elite_brand_section',
        'type'    => 'checkbox',
    ));

    // Announcement Bar Text
    $wp_customize->add_setting('paso_announcement_text', array(
        'default'           => '✨ Itu Road, Uyo · Open 7 Days A Week · Walk-ins & VIP Appointments Welcome',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_announcement_text', array(
        'label'   => __('Announcement Bar Message', 'paso-elite'),
        'section' => 'paso_elite_brand_section',
        'type'    => 'text',
    ));

    // Announcement Bar Button Text
    $wp_customize->add_setting('paso_announcement_btn', array(
        'default'           => 'Chat on WhatsApp',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_announcement_btn', array(
        'label'   => __('Announcement Button Label', 'paso-elite'),
        'section' => 'paso_elite_brand_section',
        'type'    => 'text',
    ));

    // -------------------------------------------------------------
    // Section 3: Hero Section Settings
    // -------------------------------------------------------------
    $wp_customize->add_section('paso_elite_hero_section', array(
        'title'    => __('Hero Section', 'paso-elite'),
        'panel'    => 'paso_elite_settings_panel',
        'priority' => 20,
    ));

    // Hero Eyebrow
    $wp_customize->add_setting('paso_hero_eyebrow', array(
        'default'           => 'ITU ROAD · UYO, NIGERIA · BESPOKE UNISEX SALON',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_hero_eyebrow', array(
        'label'   => __('Hero Eyebrow Label', 'paso-elite'),
        'section' => 'paso_elite_hero_section',
        'type'    => 'text',
    ));

    // Hero Headline
    $wp_customize->add_setting('paso_hero_headline', array(
        'default'           => 'A place where good look meets confidence.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_hero_headline', array(
        'label'   => __('Hero Main Headline', 'paso-elite'),
        'section' => 'paso_elite_hero_section',
        'type'    => 'text',
    ));

    // Hero Description
    $wp_customize->add_setting('paso_hero_description', array(
        'default'           => 'Precision haircuts, master stitch braids, flawless wig installations, and executive grooming in an unhurried luxury atmosphere.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_hero_description', array(
        'label'   => __('Hero Description', 'paso-elite'),
        'section' => 'paso_elite_hero_section',
        'type'    => 'textarea',
    ));

    // Hero Custom Image
    $wp_customize->add_setting('paso_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'paso_hero_image', array(
        'label'       => __('Hero Image (Leave empty to use authentic salon photo)', 'paso-elite'),
        'section'     => 'paso_elite_hero_section',
        'description' => __('Upload an image to override the default hero photo.', 'paso-elite'),
    )));

    // -------------------------------------------------------------
    // Section 4: About Us Section Settings
    // -------------------------------------------------------------
    $wp_customize->add_section('paso_elite_about_section', array(
        'title'    => __('About Us Section', 'paso-elite'),
        'panel'    => 'paso_elite_settings_panel',
        'priority' => 25,
    ));

    $wp_customize->add_setting('paso_about_headline', array(
        'default'           => 'Where personal grooming becomes an intimate architectural art.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_about_headline', array(
        'label'   => __('About Headline', 'paso-elite'),
        'section' => 'paso_elite_about_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('paso_about_p1', array(
        'default'           => 'Paso Elite Unisex Salon was established with the vision to provide exceptional beauty and grooming services in a professional, comfortable, and welcoming environment.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_about_p1', array(
        'label'   => __('About Paragraph 1', 'paso-elite'),
        'section' => 'paso_elite_about_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('paso_about_p2', array(
        'default'           => 'At Paso Elite, we believe beauty and looking good is more than just appearance — it is about confidence, self-expression, and feeling proud of yourself. Whether you are walking in for a fresh fade, an intricate braid pattern, flawless nails, or a complete beauty transformation, we strive to make every visit memorable.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_about_p2', array(
        'label'   => __('About Paragraph 2', 'paso-elite'),
        'section' => 'paso_elite_about_section',
        'type'    => 'textarea',
    ));

    // -------------------------------------------------------------
    // Section 5: Social Media Links
    // -------------------------------------------------------------
    $wp_customize->add_section('paso_elite_social_section', array(
        'title'    => __('Social Media Links', 'paso-elite'),
        'panel'    => 'paso_elite_settings_panel',
        'priority' => 30,
    ));

    $wp_customize->add_setting('paso_instagram', array(
        'default'           => 'https://instagram.com/pasoelite',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_instagram', array(
        'label'   => __('Instagram URL', 'paso-elite'),
        'section' => 'paso_elite_social_section',
        'type'    => 'url',
    ));

    $wp_customize->add_setting('paso_tiktok', array(
        'default'           => 'https://tiktok.com/@pasoelite',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('paso_tiktok', array(
        'label'   => __('TikTok URL', 'paso-elite'),
        'section' => 'paso_elite_social_section',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'paso_elite_customize_register');
