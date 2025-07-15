<?php

/** 
 * Archive Template
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */
defined('ABSPATH') || exit;

$queried_object = get_queried_object();
$term_id        = $queried_object->term_id ?? 0;
$archive = new QMA_Archive($term_id);

get_header();
get_template_part('temp/archive/archive', '', ['type' => 'category', 'archive' => $archive]);
get_footer();
