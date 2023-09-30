<?php
// Create the array with student names as keys and marks as values
$marks = [
    "Pratik" => 34,
    "Reema" => 36,
    "ram" => 45,
    "shyam" => 30,
    
];

// Display the original array
echo "Original Array:<br>";
print_r($marks);

// Sort the array by marks in ascending order
asort($marks);
echo "Array Sorted by Marks in Ascending Order:<br>";
print_r($marks);

// Sort the array by names in descending order
krsort($marks);
echo "\nArray Sorted by Names in Descending Order:<br>";
print_r($marks);
?>
