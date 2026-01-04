<?php
require_once("./india.php");

function saveUserArrayToJson($userId, $dataArray) {
    // 1. Define the folder name
    $directory = '../data';

    // 2. Check if the folder exists, if not, create it
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }

    // 3. Generate the timestamp: DayMonthYear_HourMinuteSecond (24h)
    // Example: 01022026_140530
    $timestamp = date("dmY_His");

    // 4. Construct the filename using the userId and timestamp
    $fileName = "india.json";
    $filePath = $directory . '/' . $fileName;

    // 5. Convert the multi-dimensional array to a JSON string
    // JSON_PRETTY_PRINT makes the file readable for humans
    $jsonContent = json_encode($dataArray, JSON_PRETTY_PRINT);

    // 6. Save the file to the folder
    if (file_put_contents($filePath, $jsonContent)) {
        echo "File successfully saved: " . $filePath;
    } else {
        echo "Error: Could not save the file.";
    }
}

// --- Example Usage ---

$userId = "101";

// A multi-dimensional array (Matrix style)

saveUserArrayToJson($userId, $india);
?>
