<?php
// Get requested page key
$pageKey = $_GET['page'] ?? 'default';

// Define the path to JSON data files
$jsonPath = __DIR__ . '/../data/pages/' . $pageKey . '.json';

// Check if the JSON file exists
if (file_exists($jsonPath)) {
    // Load JSON data
    $pageData = json_decode(file_get_contents($jsonPath), true);

    // Determine the template to load
    $template = $pageData['template'] ?? null;

    if ($template && file_exists(__DIR__ . '/frontpages/' . $template)) {
        include __DIR__ . '/frontpages/' . $template;
    } else {
        echo "Template not found!";
    }
} else {
    echo "Page not found!";
}
