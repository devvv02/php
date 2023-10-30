<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>
<body>
    <h2>Visitor Counter</h2>

    <?php
    // Check if the 'visit_count' cookie is set
    if (isset($_COOKIE['visit_count'])) {
        $visitCount = $_COOKIE['visit_count'];
        $visitCount++; // Increment the visit count
    } else {
        $visitCount = 1; // Initialize the visit count to 1 for the first visit
    }

    // Set the 'visit_count' cookie with the updated count
    setcookie('visit_count', $visitCount, time() + 3600 * 24, '/'); // Expires in 24 hours

    echo "<p>You have visited this page $visitCount time(s).</p>";
    ?>

    <p>Refresh the page to increase the visit count.</p>
</body>
</html>
