<?php
// Specify the file path
$filename = "temp.txt"; // Replace with your file's path

// Check if the file exists
if (file_exists($filename)) {
    // Read the file content
    $content = file_get_contents($filename);

    // Count lines, words, and characters
    $lines = count(explode("\n", $content));
    $words = str_word_count($content);
    $characters = strlen($content);

    // Display the content
    echo "<h2>File Content</h2>";
    echo "<pre>$content</pre>";

    // Display the statistics
    echo "<h2>File Statistics</h2>";
    echo "Total Lines: $lines<br>";
    echo "Total Words: $words<br>";
    echo "Total Characters: $characters<br>";
} else {
    echo "The file does not exist.";
}
?>
