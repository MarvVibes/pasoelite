<?php
/**
 * Template part: Featured Lookbook Section
 * Supports dynamic WordPress posts from the 'paso_lookbook' Custom Post Type,
 * with fallback to the authentic curated salon photo collection.
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$whatsapp = paso_get_whatsapp();

// Query custom post type
$lookbook_query = new WP_Query(array(
    'post_type'      => 'paso_lookbook',
    'posts_per_page' => 50,
    'post_status'    => 'publish',
    'orderby'        => 'menu_order date',
    'order'          => 'DESC',
));

$has_custom_posts = $lookbook_query->have_posts();
?>
<section class="section featured-section" id="lookbook">
  <div class="wrap">
    <div class="section-heading">
      <div>
        <p class="eyebrow">VERIFIED CRAFTSMANSHIP · REAL CLIENT SHOWCASE</p>
        <h2>Worth every compliment.</h2>
      </div>
      <p>
        Browse real looks handcrafted by our master artisans on Itu Road.<br class="desktop-break" />
        Every cut is matched to bone structure and every braid is finished with gentle care.
      </p>
    </div>

    <!-- Filter Toolbar like SWOT Gadgets -->
    <div class="product-toolbar">
      <div class="filter-list" id="styleFilterList" aria-label="Filter hairstyles">
        <button class="filter active" data-filter="all" aria-pressed="true">All styles</button>
        <button class="filter" data-filter="Men's Cuts" aria-pressed="false">Men's cuts</button>
        <button class="filter" data-filter="Braids" aria-pressed="false">Braids</button>
        <button class="filter" data-filter="Fixing & Wigs" aria-pressed="false">Fixing &amp; Wigs</button>
        <button class="filter" data-filter="Kids Cuts" aria-pressed="false">Kids cuts</button>
        <button class="filter" data-filter="Spa & Care" aria-pressed="false">Spa &amp; Grooming</button>
      </div>
      <span class="small muted">Chat us on WhatsApp for fast booking &amp; style inquiries.</span>
    </div>

    <!-- Authentic Product-Style Visual Cards -->
    <div class="products" id="galleryGrid">
      <?php
      if ($has_custom_posts) :
          while ($lookbook_query->have_posts()) : $lookbook_query->the_post();
              $post_id    = get_the_ID();
              $badge      = get_post_meta($post_id, '_paso_badge', true);
              $wa_custom  = get_post_meta($post_id, '_paso_wa_msg', true);
              $image_url  = has_post_thumbnail() ? get_the_post_thumbnail_url($post_id, 'large') : get_template_directory_uri() . '/assets/images/mens cut 3.jpeg';

              // Get category term
              $terms = get_the_terms($post_id, 'lookbook_cat');
              $category_slug = 'all';
              $category_name = 'Salon Styling';
              if (!empty($terms) && !is_wp_error($terms)) {
                  $first_term = $terms[0];
                  $category_slug = $first_term->name;
                  $category_name = $first_term->name;
              }

              $wa_text = !empty($wa_custom) ? $wa_custom : 'Hello Paso Elite! I\'d like to book ' . get_the_title() . '.';
              $wa_link = 'https://wa.me/' . esc_attr($whatsapp) . '?text=' . rawurlencode($wa_text);
      ?>
          <article class="product" data-category="<?php echo esc_attr($category_slug); ?>">
            <div class="product-image">
              <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" decoding="async" />
              <?php if (!empty($badge)) : ?>
                <span><?php echo esc_html($badge); ?></span>
              <?php endif; ?>
            </div>
            <p class="product-category"><?php echo esc_html($category_name); ?></p>
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_strip_all_tags(get_the_excerpt()); ?></p>
            <a href="<?php echo esc_url($wa_link); ?>" target="_blank" rel="noopener">
              <span>Book on WhatsApp</span>
              <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
            </a>
          </article>
      <?php
          endwhile;
          wp_reset_postdata();
      else :
          // Render authentic default catalog
          $default_items = paso_get_default_lookbook_items();
          foreach ($default_items as $item) :
              $wa_link = 'https://wa.me/' . esc_attr($whatsapp) . '?text=' . rawurlencode($item['wa_msg']);
      ?>
          <article class="product" data-category="<?php echo esc_attr($item['category']); ?>">
            <div class="product-image">
              <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" decoding="async" />
              <span><?php echo esc_html($item['badge']); ?></span>
            </div>
            <p class="product-category"><?php echo esc_html($item['cat_label']); ?></p>
            <h3><?php echo esc_html($item['title']); ?></h3>
            <p><?php echo esc_html($item['desc']); ?></p>
            <a href="<?php echo esc_url($wa_link); ?>" target="_blank" rel="noopener">
              <span>Book on WhatsApp</span>
              <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
            </a>
          </article>
      <?php
          endforeach;
      endif;
      ?>
    </div>

    <!-- Direct Inspiration CTA -->
    <?php get_template_part('template-parts/section', 'cta'); ?>
  </div>
</section>
