<?php
// load.php

$file = 'flashcard_data.json';

// Set the content type header to JSON
header('Content-Type: application/json');

// Check if the file exists and send its contents
if (file_exists($file)) {
    readfile($file);
} else {
    // If no data file exists yet, send back an empty array
    echo '[]';
}
?>