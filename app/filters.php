<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return '&hellip;';
});

/**
 * Add the support taxonomy on the "portfolio" post type single page.
 */
add_filter('post_type_link', function ($post_link, $id = 0) {
    $post = get_post($id);
    if (is_object($post)) {
        $terms = wp_get_object_terms($post->ID, 'support');
        if ($terms) {
            return str_replace('%support%', $terms[0]->slug, $post_link);
        }
    }
    return $post_link;
}, 1, 3);

/**
 * Allow only some default blocks in the editor.
 * Retrieve all created ACF Blocks Types and inject them into the allowed blocks array.
 */
add_filter('allowed_block_types_all', function($allowed_blocks) {
    return array_merge([
        'core/image',
        'core/paragraph',
        'core/heading',
        'core/list',
        'core/gallery',
        'core/columns',
        'core/code',
        'core/html',
        'core/preformatted',
        'core/buttons',
        'core/text-columns',
        'core/more',
        'core/spacer',
        'core/group',
        'core/shortcode'
    ], array_keys(acf_get_block_types()));
});

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Do not load the WPCF7 scripts and styles on the frontend
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );
add_filter('wp_nav_menu_objects', function ($items, $args) {
    foreach ($items as &$item) {
        if ($imageField = get_field('image', $item)) {
            $item->title = wp_get_attachment_image($imageField, 'thumbnail');
            $item->classes[] = 'menu-item-image';
        }
    }
    return $items;
}, 10, 2);
