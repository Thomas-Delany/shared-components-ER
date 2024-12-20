<?php

// Get the requested URL path
$urlPath = $_GET['url'] ?? 'default';
$urlPath = trim($urlPath, '/');
$urlPath = str_replace('..', '', $urlPath); // Prevent directory traversal attacks

// Paths
$baseDir = __DIR__ . '/../data/pages/'; // JSON files location
$config = include __DIR__ . '/config.php'; // Centralized PHP variables

// Map URL to JSON file
$jsonPath = $baseDir . $urlPath . '.json';

// Check if parent page (e.g., /adjectives/index.json)
if (!file_exists($jsonPath)) {
    $jsonPath = $baseDir . $urlPath . '/index.json';
}

// Load JSON data if file exists
if (file_exists($jsonPath)) {
    $pageData = json_decode(file_get_contents($jsonPath), true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Invalid JSON data for " . htmlspecialchars($urlPath));
    }

    // Extract metadata from JSON
    $metadata = $pageData['metadata'] ?? [];

    // Merge PHP-only variables from config
    $base_url = $config['BASE_URL']; // Example: BASE_URL = "https://example.com/"
    $image_url = $base_url . 'assets/images/' . ($metadata['image_alt'] ?? 'default') . '.png';

    // Variables for the template
    $title = $pageData['title'] ?? 'Untitled Page';
    $show_toc = $metadata['show_toc'] ?? false;

    // Determine template
    $template = $pageData['template'] ?? 'default_template.php';
    $templatePath = __DIR__ . '/frontpages/' . $template;

    // Include the correct template
    if (file_exists($templatePath)) {
        include $templatePath;
    } else {
        die("Template file not found: " . htmlspecialchars($template));
    }
} else {
    // Return 404 if JSON file is not found
    http_response_code(404);
    echo "404 - Page not found!";
    exit;
}
