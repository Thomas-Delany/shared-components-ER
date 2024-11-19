<?php
function generate_breadcrumbs() {
    // Get the current URL path
    $url = $_SERVER['REQUEST_URI'];
    $segments = explode('/', trim($url, '/'));
    
    // Start breadcrumb output
    echo '<nav aria-label="breadcrumb">';
    echo '<ol class="breadcrumb">';
    echo '<li class="breadcrumb-item"><a href="/">Home</a></li>';
    
    // Initialize path variable
    $path = '';
    
    // Loop through each segment
    foreach ($segments as $index => $segment) {
        // Replace hyphens with spaces and capitalize words
        $displaySegment = ucwords(str_replace('-', ' ', $segment));
        
        // Remove .php extension for the display
        $displaySegment = str_replace('.php', '', $displaySegment);
        
        // Accumulate the path
        $path .= '/' . $segment;
        
        // If it's the last segment, make it active
        if ($index == count($segments) - 1) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . $displaySegment . '</li>';
        } else {
            // Create a link for other segments
            echo '<li class="breadcrumb-item"><a href="' . $path . '">' . $displaySegment . '</a></li>';
        }
    }
    
    echo '</ol>';
    echo '</nav>';
}
?>
