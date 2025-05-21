<?php
// router.php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// If the requested file exists, serve it directly.
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false; // serve the requested resource as-is.
}

// Otherwise, serve index or home page (change this if your main file is different)
require_once __DIR__ . '/home.php';