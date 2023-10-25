<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Result</title>
</head>
<body>
    <h2>Image Upload Result</h2>

    <?php
    if (isset($_POST['submit'])) {
        $allowedExtensions = ['jpeg', 'jpg', 'gif'];
        $maxSize = 200 * 1024; // 200KB

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['image'];
            $extension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
            $size = $image['size'];

            if (in_array($extension, $allowedExtensions) && $size <= $maxSize) {
                $uploadDir = 'uploads/';
                $uploadPath = $uploadDir . $image['name'];

                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
                    echo "<p>Image uploaded successfully.</p>";
                    echo "<p><strong>Image Path:</strong> $uploadPath</p>";
                } else {
                    echo "<p>Error uploading the image. Please try again.</p>";
                }
            } else {
                echo "<p>Invalid image format or size exceeds 200KB. Allowed formats: JPEG, JPG, GIF.</p>";
            }
        } else {
            echo "<p>Error uploading the image. Please try again.</p>";
        }
    }
    ?>
</body>
</html>
