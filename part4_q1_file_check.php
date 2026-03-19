<?php
// Part IV Q1: Check file existence and permissions
$file = "D://myfile/file.txt";
// Check if file exists
if (!file_exists($file)) {
    // If not, create the file
    $handle = fopen($file, "w");
    fclose($handle);
    // Set read and write permissions
    chmod($file, 0666);
    echo "File created and permissions set.<br>";
} else {
    // Check read and write permissions
    if (is_readable($file) && is_writable($file)) {
        echo "File exists and has read/write permissions.<br>";
    } else {
        chmod($file, 0666);
        echo "Permissions updated to read/write.<br>";
    }
}
?>
