<?php
// Create a 3x2 matrix (2-dimensional array)
$matrix = [
    [1, 2],
    [3, 4],
    [5, 6]
];

// Display the matrix
echo "Matrix Contents:\n";
for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 2; $col++) {
        echo $matrix[$row][$col] . "&nbsp";
    }
    echo "<br>";
}
?>
