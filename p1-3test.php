<?php
 
// Function to find the transpose of a matrix
function transposeMatrix($matrix) {
    $transposedMatrix = array();
    $rows = count($matrix);
    $columns = count($matrix[0]);
 
    for ($i = 0; $i < $columns; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            $transposedMatrix[$i][$j] = $matrix[$j][$i];
        }
    }
 
    return $transposedMatrix;
}

// Function to find the multiplication of two matrices
function multiplyMatrices($matrix1, $matrix2) {
    $resultMatrix = array();
    $rows1 = count($matrix1);
    $columns1 = count($matrix1[0]);
    $columns2 = count($matrix2[0]);
 
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $columns2; $j++) {
            $resultMatrix[$i][$j] = 0;
            for ($k = 0; $k < $columns1; $k++) {
                $resultMatrix[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }
 
    return $resultMatrix;
}

// Function to find the addition of two matrices
function addMatrices($matrix1, $matrix2) {
    $resultMatrix = array();
    $rows = count($matrix1);
    $columns = count($matrix1[0]);
 
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            $resultMatrix[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
 
    return $resultMatrix;
}

// Predefined input matrices
$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6)
);

$matrix2 = array(
    array(7, 8),
    array(9, 10),
    array(11, 12)
);

// Finding the transpose of the first matrix
$transpose = transposeMatrix($matrix1);
echo "Transpose of the first matrix:<br>";
foreach ($transpose as $row) {
    echo implode(" ", $row) . "<br>";
}
echo "<br>";

// Finding the multiplication of the two matrices
$product = multiplyMatrices($matrix1, $matrix2);
echo "Multiplication of the two matrices:<br>";
foreach ($product as $row) {
    echo implode(" ", $row) . "<br>";
}
echo "<br>";

// Finding the addition of the two matrices
$sum = addMatrices($matrix1, $matrix2);
echo "Addition of the two matrices:<br>";
foreach ($sum as $row) {
    echo implode(" ", $row) . "<br>";
}
?>
