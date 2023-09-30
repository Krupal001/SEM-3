<?php
// Sample array
$sampleArray = [10, 20, 30, 40, 50];

// Value to search for
$searchValue = 20;

// Check if the value is present in the array
if (in_array($searchValue, $sampleArray)) {
    // Search for the value in the array and get its index
    $index = array_search($searchValue, $sampleArray);
    
    // Print the index of the search value
    echo "The value $searchValue is present at index: $index\n";
} else {
    echo "The value $searchValue is not present in the array.\n";
}
?>
