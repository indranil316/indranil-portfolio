<?php
// index.php

// Specify the path to your index.html file
$htmlFilePath = './index.html';

// Check if the file exists
if (file_exists($htmlFilePath)) {
    // Include and output the content of index.html
    include $htmlFilePath;
} else {
    // Display an error message if the file doesn't exist
    echo "Error: index.html not found.";
}
?>
