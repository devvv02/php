<?php
$servername = "localhost"; // Replace with your MySQL server address
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Task 1: Create the StudentDB database
$sql = "CREATE DATABASE IF NOT EXISTS StudentDB";
if ($conn->query($sql) === TRUE) {
    echo "Task 1: Database 'StudentDB' created successfully.<br>";
} else {
    echo "Task 1: Error creating database: " . $conn->error . "<br>";
}

// Task 2: List all databases available in MySQL
$sql = "SHOW DATABASES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Task 2: Databases available in MySQL:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row["Database"] . "<br>";
    }
} else {
    echo "Task 2: No databases found.<br>";
}

// Task 3: List all tables available in StudentDB
$database = "StudentDB";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Task 3: Tables available in '$database':<br>";
    while ($row = $result->fetch_row()) {
        echo $row[0] . "<br>";
    }
} else {
    echo "Task 3: No tables found in '$database'.<br>";
}

// Task 4: Create the student table in StudentDB
$sql = "CREATE TABLE IF NOT EXISTS student (
    Enroll_no VARCHAR(20) PRIMARY KEY,
    name VARCHAR(255),
    age INT,
    marks DECIMAL(5,2)
)";

if ($conn->query($sql) === TRUE) {
    echo "Task 4: Table 'student' created successfully.<br>";
} else {
    echo "Task 4: Error creating table: " . $conn->error . "<br>";
}

// Close the connection
$conn->close();
?>
