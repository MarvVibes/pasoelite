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
            'image'       => $img_dir . 'IMG-20260916-WA0016.jpg.jpeg',
            'badge'       => 'PRECISION FADE',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Executive Low Taper Fade',
            'desc'        => 'Seamless skin transition, razor-clean temple line-up, and beard definition.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Executive Low Taper Fade style.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0036.jpg.jpeg',
            'badge'       => 'STITCH BRAIDS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Heart Swirl Stitch Cornrows',
            'desc'        => 'Artistic curve parting with precision feed-in cornrows and curly high bun finish.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Heart Swirl Stitch Cornrows.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260916-WA0017.jpg.jpeg',
            'badge'       => 'BEARD & FADE',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Mid Drop Fade & Line-up',
            'desc'        => 'Curved drop silhouette with hot towel conditioning and organic beard oil treatment.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Mid Drop Fade style.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0042.jpg.jpeg',
            'badge'       => 'PASSION TWISTS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Caramel Passion Twists & Cornrows',
            'desc'        => 'Two-tone ombre twists with painless cornrow parting and edge nourishment.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Caramel Passion Twists.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0022.jpg.jpeg',
            'badge'       => 'STITCH BRAIDS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Geometric Clean Stitch Cornrows',
            'desc'        => 'Sleek symmetrical parting, long-lasting grip, and neat edge styling.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Geometric Stitch Cornrows.',
        ),
        array(
            'image'       => $img_dir . 'real_guy_barbing.jpg',
            'badge'       => 'BRAID & FADE',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Cornrow Crown & Razor Taper',
            'desc'        => 'Sharp high contrast fade with razor-cut design line and clean braided crown.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Cornrow Crown and Taper.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0024.jpg.jpeg',
            'badge'       => 'KIDS STYLING',
            'category'    => 'Kids Cuts',
            'cat_label'   => 'Kids Grooming',
            'title'       => 'Gentle Taper Cut for Kids',
            'desc'        => 'Patience-first haircut with quiet clippers, smooth finish, and friendly care.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book a Gentle Kids Cut.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0037.jpg.jpeg',
            'badge'       => 'FRONTAL INSTALL',
            'category'    => 'Fixing & Wigs',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Bone Straight HD Frontal Install',
            'desc'        => 'Melted lace with custom bleaching, plucked hairline, and bone-straight silk press.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the HD Lace Frontal Install.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0076.jpg.jpeg',
            'badge'       => 'KNOTLESS BRAIDS',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Waist-Length Golden Ombre Braids',
            'desc'        => 'Clean square sections, lightweight feel, and hot water dipped sleek tips.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Waist-Length Golden Braids.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260917-WA0063.jpg.jpeg',
            'badge'       => 'LOW TAPER FADE',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Executive Low Taper & Texturing',
            'desc'        => 'Seamless taper fade with clean neckline alignment, sharp perimeter shaping, and natural texture conditioning.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Executive Low Taper Fade.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260917-WA0061.jpg.jpeg',
            'badge'       => 'LUXURY NAIL ART',
            'category'    => 'Spa & Care',
            'cat_label'   => 'Nail Care & Spa',
            'title'       => 'Sculpted Gel Manicure & French Art',
            'desc'        => 'Precision cuticles, custom nail extensions, and glossy marble gel nail art finished under salon care.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book a Luxury Manicure Session.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260917-WA0062.jpg.jpeg',
            'badge'       => 'SPA PEDICURE',
            'category'    => 'Spa & Care',
            'cat_label'   => 'Nail Care & Spa',
            'title'       => 'Deluxe Manicure & Pedicure Spa',
            'desc'        => 'Complete foot soak, exfoliation, soothing cuticle treatment, and matching 3D floral nail design.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book a Pedicure and Manicure Spa.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0038.jpg.jpeg',
            'badge'       => 'WIG REVAMP',
            'category'    => 'Fixing & Wigs',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Body Wave Revamp & Styling',
            'desc'        => 'Deep conditioning treatment, lace renewal, and soft bouncy Hollywood curls.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book a Wig Revamp Session.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260917-WA0059.jpg.jpeg',
            'badge'       => 'TEMPLE TAPER',
            'category'    => 'Men\'s Cuts',
            'cat_label'   => 'Men\'s Grooming',
            'title'       => 'Temple Taper & Line-up',
            'desc'        => 'Subtle side fade, preserved volume on crown, and sharp temple framing.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book the Temple Taper Cut.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0071.jpg.jpeg',
            'badge'       => 'CORNROW PUFF',
            'category'    => 'Braids',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Curved Cornrow Swirl & Afro Bun',
            'desc'        => 'Intricate cornrow center design with natural textured back and clean side burn finish.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Curved Cornrow Swirl.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0046.jpg.jpeg',
            'badge'       => 'SCHOOL CUT',
            'category'    => 'Kids Cuts',
            'cat_label'   => 'Kids Grooming',
            'title'       => 'Smart Low Cut for Boys',
            'desc'        => 'Even low trim with soft rounded edges, ideal for school regulations and neatness.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book a Smart Kids Cut.',
        ),
        array(
            'image'       => $img_dir . 'IMG-20260918-WA0039.jpg.jpeg',
            'badge'       => 'BRIDAL FINISH',
            'category'    => 'Fixing & Wigs',
            'cat_label'   => 'Women\'s Styling',
            'title'       => 'Bridal Frontal & Updo Styling',
            'desc'        => 'Camera-ready bridal elegance with glueless lace installation and veil attachment.',
            'wa_msg'      => 'Hello Paso Elite! I\'d like to book Bridal Styling.',
        ),
    );
}
