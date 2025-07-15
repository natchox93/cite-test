<?php

/** 
 * error 404 Template
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */
defined('ABSPATH') || exit; // Exit if accessed directly

get_header(); ?>

<div class="flex items-center justify-center py-8">
    <div class="px-4 mx-auto text-center">
        <h1 class="mb-4 text-3xl font-bold text-gray-800 dark:text-white"><?php _e('404 - Page Not Found', 'qma') ?></h1>
        <p class="mb-4 text-gray-600 dark:text-gray-400"><?php _e('The page you are looking for does not exist.', 'qma') ?></p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block px-4 py-2 text-white bg-qma-primary rounded-qma"><?php _e('Go back to homepage', 'qma') ?></a>
    </div>
</div>

<?php get_footer(); ?>