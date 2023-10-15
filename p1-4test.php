<!DOCTYPE html>
<html>
<head>
    <title>Matrix Operations</title>
</head>
<body>
    <h2>Matrix Operations</h2>
    <form method="post" action="">
        <label for="matrix1">Enter Matrix 1 (separate elements with spaces):</label><br>
        <textarea name="matrix1" rows="4" cols="30"></textarea><br><br>
        
        <label for="matrix2">Enter Matrix 2 (separate elements with spaces):</label><br>
        <textarea name="matrix2" rows="4" cols="30"></textarea><br><br>
        
        <label for="operation">Select Operation:</label>
        <select name="operation">
            <option value="transpose">Transpose</option>
            <option value="addition">Addition</option>
            <option value="multiplication">Multiplication</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    function parseMatrix($matrixString) {
        $rows = explode("\n", $matrixString);
        $matrix = array();
        foreach ($rows as $row) {
            $matrix[] = array_map('intval', explode(' ', trim($row)));
        }
        return $matrix;
    }

    function displayMatrix($matrix) {
        foreach ($matrix as $row) {
            echo implode(" ", $row) . "<br>";
        }
    }

    if(isset($_POST['submit'])) {
        $matrix1 = parseMatrix($_POST['matrix1']);
        $matrix2 = parseMatrix($_POST['matrix2']);
        $operation = $_POST['operation'];

        if ($operation == 'transpose') {
            echo "<h3>Matrix 1 Transpose:</h3>";
            $transpose = array_map(null, ...$matrix1);
            displayMatrix($transpose);
        } elseif ($operation == 'addition') {
            if (count($matrix1) != count($matrix2) || count($matrix1[0]) != count($matrix2[0])) {
                echo "<p>Matrix dimensions are not compatible for addition.</p>";
            } else {
                echo "<h3>Matrix 1 + Matrix 2:</h3>";
                $result = array();
                for ($i = 0; $i < count($matrix1); $i++) {
                    $row = array();
                    for ($j = 0; $j < count($matrix1[0]); $j++) {
                        $row[] = $matrix1[$i][$j] + $matrix2[$i][$j];
                    }
                    $result[] = $row;
                }
                displayMatrix($result);
            }
        } elseif ($operation == 'multiplication') {
            if (count($matrix1[0]) != count($matrix2)) {
                echo "<p>Matrix dimensions are not compatible for multiplication.</p>";
            } else {
                echo "<h3>Matrix 1 * Matrix 2:</h3>";
                $result = array();
                for ($i = 0; $i < count($matrix1); $i++) {
                    $row = array();
                    for ($j = 0; $j < count($matrix2[0]); $j++) {
                        $sum = 0;
                        for ($k = 0; $k < count($matrix2); $k++) {
                            $sum += $matrix1[$i][$k] * $matrix2[$k][$j];
                        }
                        $row[] = $sum;
                    }
                    $result[] = $row;
                }
                displayMatrix($result);
            }
        }
    }
    ?>
</body>
</html>
