<?php
function load_json($file_path) {
    if (!file_exists($file_path)) {
        die("JSON file not found: $file_path");
    }
    $data = json_decode(file_get_contents($file_path), true);
    if ($data === null) {
        die("Error parsing JSON file: $file_path");
    }
    return $data;
}
?>
