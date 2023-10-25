<!DOCTYPE html>
<html>
<head>
    <title>File Content Statistics</title>
</head>
<body>
    <h2>File Content Statistics</h2>
    
    <form method="post" action="">
        <label for="file">Select a File:</label>
        <input type="file" name="file" id="file" accept=".txt">
        <input type="submit" name="submit" value="Upload and Analyze">
    </form>

    <?php

ini_set('file_uploads', '1');
ini_set('upload_max_filesize', '10M'); // Adjust the file size limit as needed
ini_set('post_max_size', '12M'); // Adjust the POST request size as needed
ini_set('max_execution_time', 300); // Adjust the execution time limit as needed

    if(isset($_POST['submit'])) {
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['file']['tmp_name'];
            $fileContent = file_get_contents($file);
            
            // Count lines, words, and characters
            $lineCount = count(explode("\n", $fileContent));
            $wordCount = str_word_count($fileContent);
            $charCount = strlen($fileContent);
            
            // Display the content and statistics
            echo "<h3>File Content:</h3>";
            echo "<pre>" . htmlspecialchars($fileContent) . "</pre>";
            echo "<p><strong>Total Lines:</strong> $lineCount</p>";
            echo "<p><strong>Total Words:</strong> $wordCount</p>";
            echo "<p><strong>Total Characters:</strong> $charCount</p>";
        } else {
            echo "<p>Error uploading the file. Please try again.</p>";
        }
    }
    ?>
</body>
</html>
