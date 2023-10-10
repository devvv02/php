<!DOCTYPE html>
<html>
<head>
    <title>Sum of Prime Numbers</title>
</head>
<body>
    <?php
        function isPrime($number) {
            if ($number < 2) {
                return false;
            }
            
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i === 0) {
                    return false;
                }
            }
            
            return true;
        }
        
        $sum = 0;
        for ($i = 2; $i < 100; $i++) {
            if (isPrime($i)) {
                $sum += $i;
            }
        }
        
        echo "The sum of prime numbers less than 100 is: " . $sum;
    ?>
</body>
</html>
