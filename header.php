<?php

/** 
 * Header Template
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div>
        <?php
        /**
         * QMA/header hook
         *
         * @hooked ads - 10
         * @hooked notices before header - 20
         * @hooked header - 30
         * @hooked notices after header - 40
         * @hooked ads - 50
         */
        do_action('QMA/header');
        ?>