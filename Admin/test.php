<?php
/**
 * Generates a small and memorable unique ID.
 *
 * @param string $prefix Optional prefix for the ID.
 * @return string The generated unique ID.
 */
function generateUniqueID($prefix = '') {
    // Generate a unique ID with a more readable format
    $uniqueID = uniqid($prefix, true); // Generate a unique ID with a prefix and more entropy
    $uniqueID = str_replace('.', '', $uniqueID); // Remove dots for readability
    $uniqueID = substr($uniqueID, -8); // Get the last 8 characters for brevity

    // Optionally, you can add a prefix to the ID
    return strtoupper($prefix . $uniqueID);
}

// Example usage:
$id = generateUniqueID('VOL-'); // Example prefix
echo "Generated ID: " . $id;
?>