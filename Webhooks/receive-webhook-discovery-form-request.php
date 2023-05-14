<?php

// Get the JSON data from the request body
$json_data = file_get_contents('php://input');

// Log the request to a file
$log_file = 'webhook-discovery-form.log';
$log_data = date('Y-m-d H:i:s') . ' - ' . $json_data . PHP_EOL;
file_put_contents($log_file, $log_data, FILE_APPEND);

?>