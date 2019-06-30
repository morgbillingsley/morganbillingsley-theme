<?php
    // Theme Support
    add_theme_support('post-thumbnails');

    // Hooks
    add_action('admin_post_nopriv_contact', 'contact_proc');
    add_action('admin_post_contact', 'contact_proc');

    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    function get_menu($name) {
        $array_menu = wp_get_nav_menu_items($name);
        $menu = array();
        foreach ($array_menu as $m) {
            if ($m->menu_item_parent == 0) {
                $menu[$m->ID] = array();
                $menu[$m->ID]['label'] = $m->title;
                $menu[$m->ID]['url'] = $m->url;
            } else {
                $menu[$m->menu_item_parent]['children'] = array(
                    'label' => $m->title,
                    'url'   => $m->url
                );
            }
        }
        return $menu;
    }

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
        $browser = get_browser(null, true);
        $client = strval($browser['parent']);
        $os = strval($browser['platform']);

        $table = 'contacts';
        $data = array(
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'datetime' => $datetime,
            'ip_address' => $ip,
            'browser' => $client,
            'operating_system' => $os
        );
        $format = array('%s','%s','%s','%s','%s','%s','%s','%s','%s');

        global $wpdb;
        $wpdb->insert($table, $data, $format);

        // Send notification
        $message = "A new contact form was submitted by {$fname} {$lname}.";
        pushover($message);

        // Redirect to homepage
        wp_redirect('http://morganbillingsley.com/');
    }
    
    function pushover($message) {
        $params = array(
            "token" => "aso8szzsjrbjswfo9w6n81qsxb5chf",
            "user" => "u4r33u7gk4txdjfcv1m2qxjnwrmag4",
            "message" => $message
        );
        $po = curl_init("https://api.pushover.net/1/messages.json");
        curl_setopt($po, CURLOPT_POSTFIELDS, $params);
        $result = curl_exec($po);
        if (curl_errno($po)) {
            error_log('Failed to send pushover notification');
        }
        curl_close($po);
    }

    function wpdocs_excerpt_more( $more ) {
        return '';
    }

    // Filters
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );    
?>