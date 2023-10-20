<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
</head>
<body>
    <h2>Submitted Data</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $interests = isset($_POST["interests"]) ? implode(", ", $_POST["interests"]) : "";
        $country = $_POST["country"];
        
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Interests:</strong> $interests</p>";
        echo "<p><strong>Country:</strong> $country</p>";
    }
    ?>
</body>
</html>
