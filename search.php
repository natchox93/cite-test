<?php

/** 
 * Search Template
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */

defined('ABSPATH') || exit;
$archive = new QMA_Archive();
get_header();
get_template_part('temp/archive/archive', '', ['type' => 'search', 'archive' => new QMA_Archive()]);
get_footer();
