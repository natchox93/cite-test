<?php

/** 
 * Single Template
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */
defined('ABSPATH') || exit; // Exit if accessed directly
$single = new QMA_Single();

get_header();
?>
<div class="qma-single py-qma">
    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();

            /**
             * Layout : 1
             *
             * @hooked QMA/single_content_header  :  breadcrumbs       10 
             * @hooked QMA/single_content_header  :  subtitle          20
             * @hooked QMA/single_content_header  :  title             30
             * @hooked QMA/single_content_header  :  meta              40
             * @hooked QMA/single_content_header  :  thumbnail         50
             * @hooked QMA/single_content_header  :  top_share         60
             * @hooked QMA/before_single_entry    :  reading_controll  10
             * @hooked QMA/after_single_entry     :  tags              10
             * @hooked QMA/single_content_footer  :  bottom_share      10
             * @hooked QMA/single_content_footer  :  follow_us         20
             * @hooked QMA/single_content_footer  :  relited           30
             * @hooked QMA/single_content_footer  :  comments          40
             */

            /**
             * Layout: 2
             *
             * @hooked QMA/single_content_header  :  breadcrumbs       10
             * @hooked QMA/single_content_header  :  thumbnail         20
             * @hooked QMA/single_content_header  :  subtitle          30
             * @hooked QMA/single_content_header  :  title             40
             * @hooked QMA/single_content_header  :  meta              50
             * @hooked QMA/single_content_header  :  top_share         60
             * @hooked QMA/before_single_entry    :  reading_controll  10
             * @hooked QMA/after_single_entry     :  tags              10
             * @hooked QMA/single_content_footer  :  bottom_share      10
             * @hooked QMA/single_content_footer  :  follow_us         20
             * @hooked QMA/single_content_footer  :  relited           30
             * @hooked QMA/single_content_footer  :  comments          40
             */

            /**
             * Layout: 3
             *
             * @hooked QMA/single_header          :  breadcrumbs       10
             * @hooked QMA/single_header          :  subtitle          20
             * @hooked QMA/single_header          :  title             30
             * @hooked QMA/single_header          :  meta              40
             * @hooked QMA/single_header          :  top_share         50
             * @hooked QMA/single_content_header  :  thumbnail         10
             * @hooked QMA/before_single_entry    :  reading_controll  10
             * @hooked QMA/after_single_entry     :  tags              10
             * @hooked QMA/single_content_footer  :  bottom_share      10
             * @hooked QMA/single_content_footer  :  follow_us         20
             * @hooked QMA/single_content_footer  :  relited           30
             * @hooked QMA/single_content_footer  :  comments          40
             */

            /**
             * Layout: 4
             *
             * @hooked QMA/single_header          :  breadcrumbs       10
             * @hooked QMA/single_header          :  subtitle          20
             * @hooked QMA/single_header          :  title             30
             * @hooked QMA/single_header          :  meta              40
             * @hooked QMA/single_header          :  thumbnail         50
             * @hooked QMA/single_content_header  :  top_share         20
             * @hooked QMA/before_single_entry    :  reading_controll  10
             * @hooked QMA/after_single_entry     :  tags              10
             * @hooked QMA/single_content_footer  :  bottom_share      10
             * @hooked QMA/single_content_footer  :  follow_us         20
             * @hooked QMA/single_content_footer  :  relited           30
             * @hooked QMA/single_content_footer  :  comments          40
             */

            /**
             * Layout: 5
             *
             * @hooked QMA/single_header          :  breadcrumbs       10
             * @hooked QMA/single_header          :  thumbnail         20
             * @hooked QMA/single_header          :  title             30
             * @hooked QMA/single_header          :  meta              40
             * @hooked QMA/single_content_header  :  top_share         20
             * @hooked QMA/before_single_entry    :  reading_controll  10
             * @hooked QMA/before_single_entry    :  subtitle          20
             * @hooked QMA/after_single_entry     :  tags              10
             * @hooked QMA/single_content_footer  :  bottom_share      10
             * @hooked QMA/single_content_footer  :  follow_us         20
             * @hooked QMA/single_content_footer  :  relited           30
             * @hooked QMA/single_content_footer  :  comments          40
             */

            /**
             * Layout: 6
             *
             * @hooked QMA/before_single_entry    :  breadcrumbs       10
             * @hooked QMA/before_single_entry    :  thumbnail         20
             * @hooked QMA/before_single_entry    :  subtitle          30
             * @hooked QMA/before_single_entry    :  title             40
             * @hooked QMA/before_single_entry    :  top_share         50
             * @hooked QMA/before_single_entry    :  meta              60
             * @hooked QMA/before_single_entry    :  reading_controll  70
             * @hooked QMA/after_single_entry     :  tags              10
             * @hooked QMA/after_single_entry     :  bottom_share      20
             * @hooked QMA/single_content_footer  :  follow_us         20
             * @hooked QMA/single_content_footer  :  relited           30
             * @hooked QMA/single_content_footer  :  comments          40
             */

            /**
             * Layout: 7
             *
             * @hooked QMA/single_content_header  :  breadcrumbs       10
             * @hooked QMA/single_content_header  :  thumbnail         20
             * @hooked QMA/single_content_header  :  subtitle          30
             * @hooked QMA/single_content_header  :  title             40
             * @hooked QMA/single_content_header  :  meta              50
             * @hooked QMA/before_single_entry    :  top_share         10
             * @hooked QMA/before_single_entry    :  reading_controll  20
             * @hooked QMA/after_single_entry     :  tags              10
             * @hooked QMA/single_content_footer  :  bottom_share      10
             * @hooked QMA/single_content_footer  :  follow_us         20
             * @hooked QMA/single_content_footer  :  relited           30
             * @hooked QMA/single_content_footer  :  comments          40
             */

            get_template_part('temp/single/content', '', ['id' => get_the_ID(), 'single' => $single]);

        endwhile;
        wp_reset_postdata();

    endif;
    ?>
    <div id="next-post-container"></div>
    <div id="qma-spinner" class="text-center hidden my-4">
        <?php echo qma_spinner() ?>
    </div>

</div>

<?php
get_footer();
