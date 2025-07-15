<?php

/** 
 * Footer Template
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */
defined('ABSPATH') || exit;

/**
 * QMA/footer hook
 *
 * @hooked ads     - 10
 * @hooked footer  - 20
 * @hooked drawer  - 30
 * @hooked search  - 40
 * @hooked notices - 50
 * @hooked go top  - 60
 */
do_action('QMA/footer');
wp_footer();
?>
</div>
</body>

</html>