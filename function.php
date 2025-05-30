<?php
function loadImages() {
    $jsonPath = __DIR__ . '/images/catalog.json';
    if (!file_exists($jsonPath)) {
        return [];
    }
    $json = file_get_contents($jsonPath);
    return json_decode($json, true);
}
?>
