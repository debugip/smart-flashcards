<?php
// save.php

// Get the JSON data sent from the browser
$json_data = file_get_contents('php://input');

// Decode it to make sure it's valid JSON
$data = json_decode($json_data);

// If the data is valid, save it to the file.
if (json_last_error() === JSON_ERROR_NONE) {
    file_put_contents('flashcard_data.json', $json_data);
    echo json_encode(['status' => 'success']);
} else {
    http_response_code(400); // Bad Request
    echo json_encode(['status' => 'error', 'message' => 'Invalid data received.']);
}
?>