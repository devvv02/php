
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h3>enter three numbers to find the max</h3>
   <p><input type="textbox" name="num1"></input><p>
   <p><input type="textbox" name="num2"></input><p>
   <p><input type="textbox" name="num3"></input><p> 
    <p><input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "post"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
}


function findMaximum($num1, $num2, $num3) {
    $max = $num1;
    
    if ($num2 > $max) {
        $max = $num2;
    }
    
    if ($num3 > $max) {
        $max = $num3;
    }
    
    return $max;
}

$maximum = findMaximum($num1, $num2, $num3);

echo "The maximum number is: " . $maximum;
?>

</body>
</html>



