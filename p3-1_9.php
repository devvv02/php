<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>
    <h2>Student Records</h2>

    <?php
    $servername = "localhost"; // Replace with your MySQL server address
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $database = "StudentDB"; // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Task 1: Delete rows with Enroll_no between 1 and 3
    $deleteSql = "DELETE FROM student WHERE Enroll_no BETWEEN 1 AND 3";
    if ($conn->query($deleteSql) === TRUE) {
        echo "Task 1: Rows deleted successfully.<br>";
    } else {
        echo "Task 1: Error deleting rows: " . $conn->error . "<br>";
    }

    // Task 2: Display rows with marks >= 35
    $selectSql = "SELECT * FROM student WHERE marks >= '35.0'";
    $result = $conn->query($selectSql);

    if ($result->num_rows > 0) {
        echo "Task 2: Rows with marks >= 35:<br>";
        echo "<table border='1'>";
        echo "<tr><th>Enroll No</th><th>Name</th><th>Age</th><th>Marks</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Enroll_no"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["marks"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "Task 2: No records found with marks >= 35.<br>";
    }

    // Task 3: Update rows with age = 30
    $updateSql = "UPDATE student SET marks = 40 WHERE age = 30";
    if ($conn->query($updateSql) === TRUE) {
        echo "Task 3: Row(s) updated successfully.<br>";
    } else {
        echo "Task 3: Error updating row(s): " . $conn->error . "<br>";
    }

    $conn->close();
    ?>
</body>
</html>
