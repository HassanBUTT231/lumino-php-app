<?php
// Handle /php route
if ($_SERVER["REQUEST_URI"] === "/php") {
    require 'index.php';
    return;
}

// Handle health check
if ($_SERVER["REQUEST_URI"] === "/health.php") {
    require 'health.php';
    return;
}

// Default 404
http_response_code(404);
echo "Not Found";
