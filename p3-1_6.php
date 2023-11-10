<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>
    <h2>Student Records</h2>
    
    <!-- Form to Insert Student Record -->
    <h3>Insert Student Record</h3>
    <form method="post" action="">
        <label for="enroll_no">Enrollment Number:</label>
        <input type="text" name="enroll_no" required><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="text" name="age" required><br><br>

        <label for="marks">Marks:</label>
        <input type="text" name="marks" required><br><br>

        <input type="submit" name="insert" value="Insert Record">
    </form>

    <?php
    $servername = "localhost"; // Replace with your MySQL server address
    $username = "root"; // Replace with your MySQL username
    $password = ""; // Replace with your MySQL password
    $database = "StudentDB"; // Replace with your database name

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert Student Record
    if (isset($_POST['insert'])) {
        $enroll_no = $_POST['enroll_no'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $marks = $_POST['marks'];

        $sql = "INSERT INTO student (Enroll_no, name, age, marks) VALUES ('$enroll_no', '$name', '$age', '$marks')";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully.";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    }

    // List All Student Records
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>List of Student Records</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Enroll No</th><th>Name</th><th>Age</th><th>Marks</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Enroll_no"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["marks"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No records found in the student table.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
