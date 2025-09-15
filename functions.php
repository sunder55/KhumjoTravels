<?php
function kt_enqueue_scripts()
{
    wp_enqueue_style('kt-style', get_template_directory_uri() . '/style.css', array(), time(), 'all');
    wp_enqueue_script('kt-script', get_template_directory_uri() . '/script.js', array(), time(), true);
    wp_enqueue_style('kt-font-style', 'https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800', array(), time());
}

include get_template_directory() . '/includes/kt-post-types.php';
include get_template_directory() . '/includes/kt-meta-fields.php';
