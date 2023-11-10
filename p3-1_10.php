<?php
$servername = "localhost"; // Replace with your MySQL server address
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "StudentDB"; // Replace with your database name

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Task 1: Drop the "student" table
$sqlDropTable = "DROP TABLE IF EXISTS student";

if ($conn->query($sqlDropTable) === TRUE) {
    echo "Task 1: Table 'student' dropped successfully.<br>";
} else {
    echo "Task 1: Error dropping table: " . $conn->error . "<br>";
}

// Task 2: Drop the "StudentDB" database
$sqlDropDatabase = "DROP DATABASE IF EXISTS StudentDB";

if ($conn->query($sqlDropDatabase) === TRUE) {
    echo "Task 2: Database 'StudentDB' dropped successfully.<br>";
} else {
    echo "Task 2: Error dropping database: " . $conn->error . "<br>";
}

$conn->close();
?>
