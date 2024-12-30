<?php

// Get the requested URL path
$urlPath = $_GET['url'] ?? 'default'; // Default to "default" if no URL is provided
$urlPath = trim($urlPath, '/');
$urlPath = str_replace('..', '', $urlPath); // Prevent directory traversal attacks

// Paths
$baseDir = __DIR__ . '/../data/pages/'; // JSON files location
$templateDir = __DIR__ . '/templates/'; // Templates directory
$config = include __DIR__ . '/config.php'; // Load centralized PHP variables

// Map URL to JSON file
$jsonPath = $baseDir . $urlPath . '.json';

// Check if the requested URL corresponds to a parent page (e.g., /adjectives/index.json)
if (!file_exists($jsonPath)) {
    $jsonPath = $baseDir . $urlPath . '/index.json';
}

// Load JSON data if the file exists
if (file_exists($jsonPath)) {
    $pageData = json_decode(file_get_contents($jsonPath), true);

    // Check for JSON parsing errors
    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Error: Invalid JSON data for " . htmlspecialchars($urlPath));
    }

    // Extract metadata and page-specific variables
    $metadata = $pageData['metadata'] ?? [];

    // Merge PHP-only variables from config.php
    $base_url = $config['BASE_URL']; // Example: BASE_URL = "https://example.com/"
    $image_url = $base_url . 'assets/images/' . ($metadata['image_alt'] ?? 'default') . '.png';

    // Variables for the template
    $page_heading = $pageData['title'] ?? 'Untitled Page';
    $page_content = $pageData['content'] ?? '';
    $show_toc = $metadata['show_toc'] ?? false;
    $see_also_links = $metadata['see_also_links'] ?? [];

    // Determine the appropriate template to use
    $template = $pageData['template'] ?? 'default_template.php';
    $templatePath = $templateDir . $template;

    // Include the selected template or fall back to a default one
    if (file_exists($templatePath)) {
        include $templatePath;
    } else {
        include $templateDir . 'default_template.php'; // Fallback to the default template
    }
} else {
    // Handle 404 - Page Not Found
    http_response_code(404);
    echo "404 - Page not found!";
    exit;
}
