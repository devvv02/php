<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <h2>Image Upload</h2>
    <form method="post" action="p2-2rev.php" enctype="multipart/form-data">
        <label for="image">Select an Image (JPEG or GIF):</label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .gif">
        <input type="submit" name="submit" value="Upload and Check">
    </form>
</body>
</html>
