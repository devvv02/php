<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
    <h2>Cookie Demo</h2>

    <?php
    // Check if the cookie 'username' is set
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
        echo "<p>Welcome back, $username!</p>";
    } else {
        echo "<p>Welcome, Guest!</p>";
    }

    // Check if a form is submitted to set the cookie
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        setcookie('username', $username, time() + 3600, '/');
        echo "<p>Cookie 'username' set. Please refresh the page to see the message.</p>";
    }
    ?>

    <form method="post" action="">
        <label for="username">Enter your name:</label>
        <input type="text" name="username" id="username">
        <input type="submit" name="submit" value="Set Cookie">
    </form>
</body>
</html>
