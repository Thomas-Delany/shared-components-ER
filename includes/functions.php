<?php
function load_json($file_path) {
    if (!file_exists($file_path)) {
        return null;  // Return null if the file doesnexist
    }

    $json_data = file_get_contents($file_path);
    return json_decode($json_data, true);  // Decode JSON into an associative array
}
?>
