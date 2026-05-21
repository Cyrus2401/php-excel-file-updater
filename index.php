<?php

// Display errors (dev mode)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Open the source CSV file
if (($open = fopen("file_example.csv", "r")) !== FALSE) {

    // Create the output file
    $fixed = fopen("file_example_fixed.csv", 'w');
    $count = 0;

    // Read and update each row
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
        $data[7] = "Write by Cyrus"; // Update the 7th column
        fputcsv($fixed, $data, ",");
        $count++;
    }

    fclose($fixed);
    fclose($open);

    echo "File successfully modified and created!";
}
