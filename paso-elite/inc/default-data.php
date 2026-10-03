<?php
/**
 * Default fallback data for Paso Elite Theme
 * Ensures the website looks 100% complete and fully populated immediately upon activation.
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

function paso_get_default_lookbook_items() {
    $img_dir = get_template_directory_uri() . '/assets/images/';

    return array(
        array(
            'image'       => $img_dir . 'mens cut 3.jpeg',
            'badge'       => 'PRECISION FADE',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Executive Low Taper Fade',
            'desc'        => 'Seamless skin transition, razor-clean temple line-up, and beard definition.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Executive Low Taper Fade style.',
        ),
        array(
            'image'       => $img_dir . 'female braiding 3.jpeg',
            'badge'       => 'STITCH BRAIDS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Heart Swirl Stitch Cornrows',
            'desc'        => 'Weightless, pain-free foundation with loose curly tendrils and nourished scalp finish.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Heart Swirl Stitch Cornrows.',
        ),
        array(
            'image'       => $img_dir . 'men cut 2.jpeg',
            'badge'       => 'BEARD & FADE',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Mid Drop Fade & Line-up',
            'desc'        => 'Curved drop silhouette with hot towel conditioning and organic beard oil treatment.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Mid Drop Fade style.',
        ),
        array(
            'image'       => $img_dir . 'female braiding 6.jpeg',
            'badge'       => 'PASSION TWISTS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Caramel Passion Twists & Cornrows',
            'desc'        => 'Two-tone ombre twists with painless cornrow parting and edge nourishment.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Caramel Passion Twists.',
        ),
        array(
            'image'       => $img_dir . 'female braiding 1.jpeg',
            'badge'       => 'STITCH BRAIDS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Geometric Clean Stitch Cornrows',
            'desc'        => 'Sleek symmetrical parting, long-lasting grip, and neat edge styling.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Geometric Stitch Cornrows.',
        ),
        array(
            'image'       => $img_dir . 'men cut and braiding.jpeg',
            'badge'       => 'BRAIDS & BEARD',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Cornrow Crown & Razor Taper',
            'desc'        => 'Sharp high contrast fade with razor-cut design line and clean braided crown.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Cornrow Crown and Taper.',
        ),
        array(
            'image'       => $img_dir . 'Childs braiding.jpeg',
            'badge'       => 'KIDS STYLING',
            'category'    => 'Kids Cuts',
            'cat_label'   => 'Kids Grooming',
            'title'       => 'Gentle Child Braids & Beaded Puff',
            'desc'        => 'Gentle, tear-free styling for kids with colorful protective beads and scalp moisturizing.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Gentle Child Braids.',
        ),
        array(
            'image'       => $img_dir . 'wig installation.jpeg',
            'badge'       => 'WIG INSTALL',
            'category'    => 'Fixing & Wigs',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Flawless HD Frontal Wig Install',
            'desc'        => 'Custom plucked hairline, bleached knots, undetectable lace melt, and bouncy curly volume.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Flawless HD Frontal Wig Install.',
        ),
        array(
            'image'       => $img_dir . 'female braids 6.jpeg',
            'badge'       => 'KNOTLESS BRAIDS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Waist-Length Golden Ombre Braids',
            'desc'        => 'Clean square sections, lightweight feel, and hot water dipped sleek tips.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Waist-Length Golden Braids.',
        ),
        array(
            'image'       => $img_dir . 'real_guy_barbing.jpg',
            'badge'       => 'RAZOR TAPER',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Geometric Cornrows & Razor Taper',
            'desc'        => 'Sleek symmetrical feed-in rows with crisp temple lineup, beard definition, and razor taper.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Geometric Cornrows and Razor Taper.',
        ),
        array(
            'image'       => $img_dir . 'nails fix.jpeg',
            'badge'       => 'LUXURY NAIL ART',
            'category'    => 'Spa & Care',
            'cat_label'   => 'Nail Care & Spa',
            'title'       => 'Sculpted Gel Manicure & French Art',
            'desc'        => 'Precision cuticles, custom nail extensions, and glossy marble gel nail art finished under salon care.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book a Luxury Manicure Session.',
        ),
        array(
            'image'       => $img_dir . 'Nail fix.jpeg',
            'badge'       => 'SPA PEDICURE',
            'category'    => 'Spa & Care',
            'cat_label'   => 'Nail Care & Spa',
            'title'       => 'Deluxe Manicure & Pedicure Spa',
            'desc'        => 'Complete foot soak, exfoliation, soothing cuticle treatment, and matching 3D floral nail design.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book a Pedicure and Manicure Spa.',
        ),
        array(
            'image'       => $img_dir . 'nails fix 4.jpeg',
            'badge'       => 'NAIL EXTENSIONS',
            'category'    => 'Spa & Care',
            'cat_label'   => 'Nail Care & Spa',
            'title'       => 'Deluxe Ruby Floral Extensions',
            'desc'        => 'Custom stiletto shaping, deep ruby gloss, embossed 3D floral accents, and nourishing hand care.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Deluxe Ruby Floral Extensions.',
        ),
        array(
            'image'       => $img_dir . 'female braids.jpeg',
            'badge'       => 'CORNROW PUFF',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Curved Cornrow Swirl & Afro Bun',
            'desc'        => 'Intricate cornrow center design with natural textured back and clean side burn finish.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Curved Cornrow Swirl.',
        ),
        array(
            'image'       => $img_dir . 'female braids 2.jpeg',
            'badge'       => 'SWIRL BRAIDS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'S-Curve Swirl Stitch Braids',
            'desc'        => 'Master parting with elegant curved feed-in braids and glossy finishing spray.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book S-Curve Swirl Stitch Braids.',
        ),
        array(
            'image'       => $img_dir . 'female braiding 9.jpeg',
            'badge'       => 'PONYTAIL BRAIDS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Honey Blonde High Ponytail Braids',
            'desc'        => 'Sleek feed-in cornrows swept upward into a voluminous honey blonde wrapped ponytail.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Honey Blonde High Ponytail Braids.',
        ),
        array(
            'image'       => $img_dir . 'mens cut 4.jpeg',
            'badge'       => 'TEMPLE TAPER',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Temple Taper & Line-up',
            'desc'        => 'Subtle side fade, preserved volume on crown, and sharp temple framing.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Temple Taper Cut.',
        ),
        array(
            'image'       => $img_dir . 'female braids 5.jpeg',
            'badge'       => 'WAVE FINISH',
            'category'    => 'Fixing & Wigs',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Cascading Waves & Frontal Styling',
            'desc'        => 'Lustrous honey-tinted body waves, custom lace melt, and silky bouncy movement.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Cascading Waves Styling.',
        ),
    );
}
