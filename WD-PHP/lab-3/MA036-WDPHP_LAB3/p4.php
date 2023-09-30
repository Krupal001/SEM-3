<?php
// Original array
$originalArray = [1, 2, 3];

$paddedArrayEnd = array_pad($originalArray, 5, 0);

$paddedArrayStart = array_pad($originalArray, -5, -1);

// Display the results
echo "Original Array: " . implode(', ', $originalArray) . "<br>";
echo "Padded Array (End): " . implode(', ', $paddedArrayEnd) . "<br>";
echo "Padded Array (Start): " . implode(', ', $paddedArrayStart) . "<br>";
?>
