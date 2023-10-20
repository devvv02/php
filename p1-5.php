<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <h2>Form Example</h2>
    <form method="post" action="p1-5rev.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male" id="male"> <label for="male">Male</label><br>
        <input type="radio" name="gender" value="Female" id="female"> <label for="female">Female</label><br>
        
        <label>Interests:</label><br>
        <input type="checkbox" name="interests[]" value="Sports" id="sports"> <label for="sports">Sports</label><br>
        <input type="checkbox" name="interests[]" value="Music" id="music"> <label for="music">Music</label><br>
        <input type="checkbox" name="interests[]" value="Books" id="books"> <label for="books">Books</label><br>
        
        <label for="country">Country:</label>
        <select name="country" id="country">
        <option value="India">India</option>
            <option value="USA">United States</option>
            <option value="Canada">Canada</option>
            <option value="UK">United Kingdom</option>
            <option value="Australia">Australia</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
