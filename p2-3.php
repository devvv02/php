<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
    <style>
        #start-time {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Hello Page</h2>
    <form method="post" action="hello.php">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
