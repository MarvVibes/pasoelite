<?php
/**
 * The main template file
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

// If visiting the front page or site root, display the complete salon experience
if (is_front_page() || (is_home() && !is_paged())) {
    include get_template_directory() . '/front-page.php';
    return;
}

get_header();
?>

<div class="wrap" style="padding: 120px 24px 80px; max-width: 900px; margin: 0 auto;">
  <?php if (have_posts()) : ?>
    <header class="page-header" style="margin-bottom: 40px;">
      <h1 class="page-title" style="font-size: 2.5rem; font-weight: 700;"><?php single_post_title(); ?></h1>
    </header>

    <?php
    while (have_posts()) : the_post();
    ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 60px;">
        <h2 style="font-size: 1.8rem; margin-bottom: 16px;">
          <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a>
        </h2>
        <div class="entry-content" style="line-height: 1.8; color: #555;">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>
  <?php else : ?>
    <p><?php esc_html_e('No posts found.', 'paso-elite'); ?></p>
  <?php endif; ?>
</div>

<?php
get_footer();
