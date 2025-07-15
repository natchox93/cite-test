<?php

/** 
 * Page Template
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */

defined('ABSPATH') || exit;
get_header();

while (have_posts()) :
    the_post();
    $post_id      = get_the_ID();
    $page_builder = get_post_meta($post_id, 'qma-page-builder-active', true) ?? false;
    $sidebar      = get_post_meta($post_id, 'qma-page-type', true) ?? 'full';

    if (!empty($page_builder)) {
        get_template_part('temp/page/page', 'builder');
    } else {
        get_template_part('temp/page/page', 'default', ['post_id' => $post_id, 'sidebar' => $sidebar]);
    }

endwhile;

get_footer();
