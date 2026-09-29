<?php
/**
 * Custom Meta Boxes for Paso Elite Lookbook and Services
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

function paso_elite_add_meta_boxes() {
    add_meta_box(
        'paso_lookbook_details',
        __('Style Details & WhatsApp Booking', 'paso-elite'),
        'paso_lookbook_meta_box_render',
        'paso_lookbook',
        'normal',
        'high'
    );

    add_meta_box(
        'paso_service_details',
        __('Service Details & WhatsApp Booking', 'paso-elite'),
        'paso_service_meta_box_render',
        'paso_service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'paso_elite_add_meta_boxes');

function paso_lookbook_meta_box_render($post) {
    wp_nonce_field('paso_lookbook_nonce_action', 'paso_lookbook_nonce');
    $badge = get_post_meta($post->ID, '_paso_badge', true);
    $wa_msg = get_post_meta($post->ID, '_paso_wa_msg', true);
    ?>
    <p>
        <label for="paso_badge"><strong><?php _e('Badge Tag (e.g. LOW TAPER FADE, STITCH BRAIDS):', 'paso-elite'); ?></strong></label><br />
        <input type="text" id="paso_badge" name="paso_badge" value="<?php echo esc_attr($badge); ?>" class="widefat" placeholder="e.g. PRECISION FADE" />
    </p>
    <p>
        <label for="paso_wa_msg"><strong><?php _e('Custom WhatsApp Inquiry Message (Optional):', 'paso-elite'); ?></strong></label><br />
        <input type="text" id="paso_wa_msg" name="paso_wa_msg" value="<?php echo esc_attr($wa_msg); ?>" class="widefat" placeholder="e.g. Hello Paso Elite! I'd like to book this style." />
        <small class="description"><?php _e('Leave blank to use default booking message with this style title.', 'paso-elite'); ?></small>
    </p>
    <?php
}

function paso_service_meta_box_render($post) {
    wp_nonce_field('paso_service_nonce_action', 'paso_service_nonce');
    $tag = get_post_meta($post->ID, '_paso_tag', true);
    $wa_msg = get_post_meta($post->ID, '_paso_wa_msg', true);
    ?>
    <p>
        <label for="paso_tag"><strong><?php _e('Service Highlight Tag (Optional):', 'paso-elite'); ?></strong></label><br />
        <input type="text" id="paso_tag" name="paso_tag" value="<?php echo esc_attr($tag); ?>" class="widefat" placeholder="e.g. SIGNATURE, EXECUTIVE, POPULAR" />
    </p>
    <p>
        <label for="paso_wa_msg"><strong><?php _e('Custom WhatsApp Inquiry Message (Optional):', 'paso-elite'); ?></strong></label><br />
        <input type="text" id="paso_wa_msg" name="paso_wa_msg" value="<?php echo esc_attr($wa_msg); ?>" class="widefat" placeholder="e.g. Hello Paso Elite! I'd like to book this service." />
    </p>
    <?php
}

function paso_elite_save_meta_boxes($post_id) {
    // Check lookbook
    if (isset($_POST['paso_lookbook_nonce']) && wp_verify_nonce($_POST['paso_lookbook_nonce'], 'paso_lookbook_nonce_action')) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (!current_user_can('edit_post', $post_id)) return;

        if (isset($_POST['paso_badge'])) {
            update_post_meta($post_id, '_paso_badge', sanitize_text_field($_POST['paso_badge']));
        }
        if (isset($_POST['paso_wa_msg'])) {
            update_post_meta($post_id, '_paso_wa_msg', sanitize_text_field($_POST['paso_wa_msg']));
        }
    }

    // Check service
    if (isset($_POST['paso_service_nonce']) && wp_verify_nonce($_POST['paso_service_nonce'], 'paso_service_nonce_action')) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (!current_user_can('edit_post', $post_id)) return;

        if (isset($_POST['paso_tag'])) {
            update_post_meta($post_id, '_paso_tag', sanitize_text_field($_POST['paso_tag']));
        }
        if (isset($_POST['paso_wa_msg'])) {
            update_post_meta($post_id, '_paso_wa_msg', sanitize_text_field($_POST['paso_wa_msg']));
        }
    }
}
add_action('save_post', 'paso_elite_save_meta_boxes');
