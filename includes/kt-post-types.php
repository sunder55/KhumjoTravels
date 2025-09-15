<?php

// create destination post type using oop
class Destination
{
    public function __construct()
    {
        add_action('init', array($this, 'register_destination_post_type'));
    }

    public function register_destination_post_type()
    {
        $labels = array(
            'name' => 'Destinations',
            'singular_name' => 'Destination',
            'menu_name' => 'Destinations',
            'name_admin_bar' => 'Destination',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Destination',
            'new_item' => 'New Destination',
            'edit_item' => 'Edit Destination',
            'view_item' => 'View Destination',
            'all_items' => 'All Destinations',
            'search_items' => 'Search Destinations',
            'not_found' => 'No destinations found.',
            'not_found_in_trash' => 'No destinations found in Trash.',
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'destinations'),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'show_in_rest' => true,
        );

        register_post_type('destination', $args);
    }
}

new Destination();
