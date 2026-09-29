<?php
/**
 * The template for displaying all pages
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="wrap" style="padding: 140px 24px 80px; max-width: 860px; margin: 0 auto;">
  <?php
  while (have_posts()) : the_post();
  ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header" style="margin-bottom: 32px;">
        <h1 class="entry-title" style="font-size: 2.75rem; font-weight: 700;"><?php the_title(); ?></h1>
      </header>

      <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail" style="margin-bottom: 32px; border-radius: 12px; overflow: hidden;">
          <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; display: block;')); ?>
        </div>
      <?php endif; ?>

      <div class="entry-content" style="line-height: 1.8; color: #333; font-size: 1.1rem;">
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'paso-elite'),
            'after'  => '</div>',
        ));
        ?>
      </div>
    </article>
  <?php endwhile; ?>
</div>

<?php
get_footer();
