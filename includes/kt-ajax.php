<?php
add_action('wp_ajax_create_booking', 'handle_booking_creation');
add_action('wp_ajax_nopriv_create_booking', 'handle_booking_creation');

function handle_booking_creation()
{

    check_ajax_referer('create_booking_nonce', 'booking_nonce');

    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    $customer_name = sanitize_text_field($_POST['customer_name']);
    $customer_email = sanitize_email($_POST['customer_email']);
    $customer_phone = sanitize_text_field($_POST['customer_phone']);
    $booking_date = sanitize_text_field($_POST['booking_date']);

    // Create order
    $order = wc_create_order();

    // Add product
    $order->add_product(wc_get_product($product_id), $quantity);

    // Add customer details
    $address = array(
        'first_name' => $customer_name,
        'email'      => $customer_email,
        'phone'      => $customer_phone
    );

    $order->set_address($address, 'billing');
    $order->set_address($address, 'shipping');

    // Add booking date as order meta
    $order->update_meta_data('booking_date', $booking_date);

    // Calculate totals
    $order->calculate_totals();

    // Save order
    $order->save();

    // email admin
    $site_name = get_bloginfo('name');
    $site_logo = get_site_icon_url(512);
    $product = wc_get_product($product_id);
    $product_title = $product->get_title();

    // In your booking creation function, replace the email sections with:
    $site_name = get_bloginfo('name');
    $site_logo = get_site_icon_url(512);

    // Admin email
    $admin_content = '<p>A new booking has been created with the following details:</p>
                        <ul>
                         <li><strong>Tour Package:</strong> ' . $product_title . '</li>
                            <li>Customer Name: ' . $customer_name . '</li>
                            <li>Email: ' . $customer_email . '</li>
                            <li>Phone: ' . $customer_phone . '</li>
                            <li>Booking Date: ' . $booking_date . '</li>
                            <li>Quantity: ' . $quantity . '</li>
                        </ul>
                        <p>Please check the admin panel for more details.</p>';

    $to = get_option('admin_email');
    $subject = sprintf('[%s] New Booking', $site_name);
    $message = get_email_template($admin_content, $site_name, $site_logo);
    $headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($to, $subject, $message, $headers);

    // Customer email
    $customer_content = '<p>Dear ' . $customer_name . ',</p>
                        <p>Thank you for your booking with ' . $site_name . '. Your booking details are:</p>
                        <ul>
                        <li><strong>Tour Package:</strong> ' . $product_title . '</li>
                            <li>Booking Date: ' . $booking_date . '</li>
                            <li>Number of People: ' . $quantity . '</li>
                        </ul>
                        <p>We will contact you soon to confirm your booking.</p>
                        <p>Best regards,<br>' . $site_name . ' Team</p>';

    $to = $customer_email;
    $subject = sprintf('[%s] Your booking has been created', $site_name);
    $message = get_email_template($customer_content, $site_name, $site_logo);
    $headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($to, $subject, $message, $headers);

    wp_send_json_success(array(
        'message' => 'Your booking has been created successfully. We will contact you soon.',
        // 'redirect' => $order->get_checkout_payment_url()
    ));
}
