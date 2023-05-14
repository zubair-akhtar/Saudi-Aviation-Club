
<?php // Register the API endpoint
add_action('rest_api_init', function () {

    // Replace 'your_secret_key' with your actual secret key
    $secret_key = 'IeiRlav9[%F7';

    register_rest_route('api/v1/membership-form', '/submissions', [
        'methods' => 'POST',
        'callback' => function (WP_REST_Request $request) use ($secret_key) {
            if ($request->get_header('X-FLUENTFORM-SECRET') !== $secret_key) {
                return new WP_Error('rest_forbidden', 'Forbidden', ['status' => 403]);
            }

            global $wpdb;
            // Replace 'wp4x_fluentform_submissions' with the actual name of your FluentForm submissions table
            $table_name = $wpdb->prefix . 'fluentform_submissions';

            $submissions = $wpdb->get_results("SELECT * FROM $table_name WHERE form_id = 3");

            return $submissions;
        },
        'permission_callback' => function () use ($secret_key) {
            // Replace 'your_secret_key' with your actual secret key
            return isset($_SERVER['HTTP_X_FLUENTFORM_SECRET']) && $_SERVER['HTTP_X_FLUENTFORM_SECRET'] === $secret_key;
        },
    ]);
});



add_action('rest_api_init', function () {

    // Replace 'your_secret_key' with your actual secret key
    $secret_key = 'IeiRlav9[%F7';

    register_rest_route('api/v1/discovery-form', '/submissions', [
        'methods' => 'POST',
        'callback' => function (WP_REST_Request $request) use ($secret_key) {
            if ($request->get_header('X-FLUENTFORM-SECRET') !== $secret_key) {
                return new WP_Error('rest_forbidden', 'Forbidden', ['status' => 403]);
            }

            global $wpdb;
            // Replace 'wp4x_fluentform_submissions' with the actual name of your FluentForm submissions table
            $table_name = $wpdb->prefix . 'fluentform_submissions';

            $submissions = $wpdb->get_results("SELECT * FROM $table_name WHERE form_id = 4");

            return $submissions;
        },
        'permission_callback' => function () use ($secret_key) {
            // Replace 'your_secret_key' with your actual secret key
            return isset($_SERVER['HTTP_X_FLUENTFORM_SECRET']) && $_SERVER['HTTP_X_FLUENTFORM_SECRET'] === $secret_key;
        },
    ]);
});

?>