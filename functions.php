<?php

/** 
 * functions.php
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */
defined('ABSPATH') || exit;
define('THEME_PATH', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('THEME_TIME_FORMAT', 'd M Y - H:i');
define('THEME_MINIFY', true);

// Ioncube notice   --------------------
function check_ioncube_installed()
{
    echo '<div class="notice notice-error is-dismissible">';
    echo '<ul>
            <li><div><b>خطأ بالسيرفر أثناء تفعيل قالب دوري بريس</b></div></li>
            <li style="color: red;"><b>IonCube Loader</b> غير مفعل على السيرفر</li>
            <li><div>يجب الإتصال بالمستضيف لتفعيل <b>Ioncube Loader</b> على موقعكم.</div></li>
            <li><div>المستضيف هو شركة الإستضافة Hosting التي تقوم بإستضافة موقعكم على سيرفراتها.</div></li>
            <li><div>إذا كنت تعمل على سيرفر خاص، برجاء الإتصال بمسئول السيرفر لتفعيل <b>Ioncube Loader</b> على السيرفر.</div></li>
            <li> <div style="color: green;font-weight: 700;">اذا كنت من مستخدمي Cpanel يمكنك تفعيل IonCube Loader بخطوات بسيطة عبر اتباع الرابط التالي <a target="_blank" href="https://3issam.com/faq/%d8%b7%d8%b1%d9%8a%d9%82%d8%a9-%d8%aa%d9%81%d8%b9%d9%8a%d9%84-ioncube-%d9%85%d9%86-%d8%ae%d9%84%d8%a7%d9%84-%d9%84%d9%88%d8%ad%d8%a9-%d8%aa%d8%ad%d9%83%d9%85-cpanel/">طريقة تفعيل Ioncube من خلال لوحة تحكم Cpanel</a> </div> </li>
        </ul>';

    echo '</div>';
}
if (extension_loaded('ionCube Loader')) {
    require_once THEME_PATH . '/inc/qma.php';
} else {
    add_action('admin_notices', 'check_ioncube_installed');
}
