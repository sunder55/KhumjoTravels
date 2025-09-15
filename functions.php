<?php
function kt_enqueue_scripts()
{
    wp_enqueue_style('kt-style', get_template_directory_uri() . '/style.css', array(), time(), 'all');
    wp_enqueue_script('kt-script', get_template_directory_uri() . '/script.js', array(), time(), true);
    wp_enqueue_style('kt-font-style', 'https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800', array(), time());
}

include get_template_directory() . '/includes/kt-post-types.php';
include get_template_directory() . '/includes/kt-meta-fields.php';



// Add Tailwind classes to wp_nav_menu links
// function khumjo_nav_menu_link_classes($atts, $item, $args)
// {
//     if ($args->theme_location === 'primary') {
//         $atts['class'] = 'text-foreground hover:text-primary transition-colors';
//     }
//     return $atts;
// }
// add_filter('nav_menu_link_attributes', 'khumjo_nav_menu_link_classes', 10, 3);

// // Add active class to current menu item
// function khumjo_nav_menu_active_class($classes, $item, $args)
// {
//     if ($args->theme_location === 'primary' && in_array('current-menu-item', $classes)) {
//         $classes[] = 'text-primary font-medium';
//     }
//     return $classes;
// }
// add_filter('nav_menu_css_class', 'khumjo_nav_menu_active_class', 10, 3);
