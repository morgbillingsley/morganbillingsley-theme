<?php
    // Theme Support
    add_theme_support('post-thumbnails');

    // Hooks
    add_action('admin_post_nopriv_contact', 'contact_proc');
    add_action('admin_post_contact', 'contact_proc');

    // Functions
    function contact_proc() {
        // Post data
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $datetime = date('Y-m-d h:i:sa');
        $ip = $_SERVER['REMOTE_ADDR'];
        $browser = get_browser();

        // Write Query
        $table = 'contacts';
        $columns = 'first_name, last_name, email, phone, message, datetime, ip_address, browser_data';
        $values = "{$fname}, {$lname}, {$email}, {$phone}, {$message}, {$datetime}, {$ip}, {$browser}";
        $sql = "INSERT INTO contacts ({$columns}) VALUES ({$values})";

        // Connection
        global $wpdb;
        $wpdb->insert(
            $table,
            array(
                'first_name' => $fname,
                'last_name' => $lname,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
                'datetime' => $datetime,
                'ip_address' => $ip,
                'browser_data' => $browser
            ),
            array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
        );

        // Redirect to homepage
        wp_redirect('http://morganbillingsley.com/');
    }
?>