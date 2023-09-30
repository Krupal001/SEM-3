<?php
function localScope() {
    // Local variable inside the function
    $localVar = "I am a local variable";
    echo "Inside function: " . $localVar . "<br>";
}

// Call the function
localScope();

// Attempt to access the local variable outside its scope (will cause an error)
echo "Outside function: " . $localVar . "<br>";
?>
