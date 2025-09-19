<?php
function kt_enqueue_scripts()
{
    wp_enqueue_style('kt-style', get_template_directory_uri() . '/style.css', array(), time(), 'all');
    wp_enqueue_script('kt-script', get_template_directory_uri() . '/script.js', array(), time(), true);
    // localize ajax
    wp_localize_script(
        'kt-script',
        'ajax_object',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
        )
    );
    wp_enqueue_style('kt-font-style', 'https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800', array(), time());

    wp_enqueue_script('kt-google-recaptcha', 'https://www.google.com/recaptcha/api.js', array(), time(), true);
}
add_action('wp_enqueue_scripts', 'kt_enqueue_scripts');

include get_template_directory() . '/includes/kt-post-types.php';
include get_template_directory() . '/includes/kt-meta-fields.php';
include get_template_directory() . '/admin/kt-settings-page.php';
include get_template_directory() . '/includes/kt-ajax.php';
// include get_template_directory() . '/includes/kt-activation.php';



/**
 * Creates the contact_us table in the database when the theme is activated.
 *
 * This function will be called when the theme is activated and will create the contact_us table in the database.
 *
 * @since 1.0.0
 */
add_action('after_switch_theme', 'create_contact_us_table');
function create_contact_us_table()
{
    global $wpdb;

    $table_name      = $wpdb->prefix . 'contact_us';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20) DEFAULT '' NOT NULL,
        message text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}


// Process contact form submission
add_action('init', 'handle_contact_us_form');
function handle_contact_us_form()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_email'])) {

        // 1. Honeypot check
        if (!empty($_POST['contact_honeypot'])) {
            return; // spam bot
        }


        // 2. Verify reCAPTCHA
        // $recaptcha_sitekey = "6Lemd80rAAAAAJa8p8yBCbh363_3Nddm-3yR69xe";
        // $recaptcha_secret = '6Lemd80rAAAAAKPJtEKpg2cUArNCtbfoE_01PLJ5';
        // 2. Verify reCAPTCHA v2

        // verfiy recaptcha starts here
        // $recaptcha_secret = '6Lemd80rAAAAAKPJtEKpg2cUArNCtbfoE_01PLJ5';
        // $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
        //     'body' => [
        //         'secret'   => $recaptcha_secret,
        //         'response' => sanitize_text_field($_POST['g-recaptcha-response']),
        //         'remoteip' => $_SERVER['REMOTE_ADDR']
        //     ]
        // ]);

        // $result = json_decode(wp_remote_retrieve_body($response));
        // if (empty($result->success)) {
        //     return; // failed captcha
        // }

        // verfiy recaptcha ends here

        // 3. Sanitize and save data
        global $wpdb;
        $table = $wpdb->prefix . 'contact_us';

        $first  = sanitize_text_field($_POST['contact_first_name']);
        $last   = sanitize_text_field($_POST['contact_last_name']);
        $name   = trim($first . ' ' . $last);
        $email  = sanitize_email($_POST['contact_email']);
        $phone  = sanitize_text_field($_POST['contact_phone']);
        $msg    = sanitize_textarea_field($_POST['contact_message']);

        // validation
        // check first and lats name length
        if (strlen($first) > 20 || strlen($last) > 20) {
            wp_redirect(add_query_arg('contact', 'error_length', wp_get_referer()));
            exit;
        }
        // message lenght upto 1000
        if (strlen($msg) > 1000) {
            wp_redirect(add_query_arg('contact', 'error_message_length', wp_get_referer()));
            exit;
        }

        if (empty($email) || empty($msg)) {
            wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
            exit;
        }

        if (!is_email($email)) {
            wp_redirect(add_query_arg('contact', 'error_email', wp_get_referer()));
            exit;
        }

        if (!is_numeric($phone)) {
            wp_redirect(add_query_arg('contact', 'error_phone', wp_get_referer()));
            exit;
        }


        $result = $wpdb->insert($table, [
            'name'    => $name,
            'email'   => $email,
            'phone'   => $phone,
            'message' => $msg,
        ]);

        // send email
        $to      = get_option('admin_email');
        $subject = 'New Contact Submission';
        $message = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $msg";
        wp_mail($to, $subject, $message);

        // 4. Optional success redirect or message
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
        exit;
    }
}



// Email template function
function get_email_template($content, $site_name, $site_logo)
{
    return '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body { margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; }
            .email-wrapper { max-width: 600px; margin: 0 auto; padding: 20px; }
            .email-header { text-align: center; padding: 20px 0; border-bottom: 1px solid #eee; }
            .logo-img { max-width: 150px; height: auto; }
            .email-content { padding: 30px 0; line-height: 1.6; color: #333; }
            .email-footer { text-align: center; padding: 20px 0; border-top: 1px solid #eee; font-size: 14px; color: #666; }
        </style>
    </head>
    <body>
        <div class="email-wrapper">
            <div class="email-header">
                <img src="' . $site_logo . '" alt="' . $site_name . '" class="logo-img">
                <h2 style="margin-top: 10px; color: #333;">' . $site_name . '</h2>
            </div>
            <div class="email-content">
                ' . $content . '
            </div>
            <div class="email-footer">
                &copy; ' . date('Y') . ' ' . $site_name . '. All rights reserved.
            </div>
        </div>
    </body>
    </html>';
}
