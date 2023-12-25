<?php
/**
 * blogpress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blogpress
 */

// Walker Nav Menu
require_once('inc/walker_nav_menu.php');

// Theme Default Function
require_once('inc/default.php');

// CSS JS Enqueue
require_once('inc/enqueue.php');

// Widget Register
require_once('inc/widget.php');

// Customizer Register
require_once('inc/customizer.php');

// Comment Form Placeholder
require_once('inc/comment-form.php');

// Blog Post View Count
require_once('inc/post_view_count.php');

// Blog Post Reading Time
require_once('inc/calculate_reading_time.php');


// Author Social
function add_social_media_fields($contactmethods) {
    // Add social media fields
    $contactmethods['twitter'] = 'Twitter';
    $contactmethods['facebook'] = 'Facebook';
    $contactmethods['instagram'] = 'Instagram';

    // Add more fields as needed

    return $contactmethods;
}
add_filter('user_contactmethods', 'add_social_media_fields');







