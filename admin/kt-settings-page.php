<?php

// setting page for contact us form submission

add_action('admin_menu', 'kt_setting_page');

function kt_setting_page()
{
    add_menu_page(
        'Contact Us Settings',
        'Contact Us',
        'manage_options',
        'kt-contact-us',
        'kt_contact_us_settings_page',
        'dashicons-email-alt'
    );
}

function kt_contact_us_settings_page()
{

    echo '<div class="wrap">';
    echo '<h1>Contact Us Submissions</h1>';

    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_us';

    // Fetch all rows
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

    if ($results) {
        echo '<table class="wp-list-table widefat striped">';
        echo '<thead><tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Submitted At</th>
              </tr></thead>';
        echo '<tbody>';

        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->id) . '</td>';
            echo '<td>' . esc_html($row->name) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->phone) . '</td>';
            echo '<td>' . esc_html($row->message) . '</td>';
            echo '<td>' . esc_html($row->created_at) . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No submissions found.</p>';
    }

    echo '</div>';
}
