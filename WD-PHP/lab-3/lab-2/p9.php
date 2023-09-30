<?php
function demonstrateStaticVariable() {
    // Declare a static variable
    static $staticVar = 0;

    // Display the current value of the static variable
    echo "Static variable value: " . $staticVar . "\n";

    // Increment the static variable
    $staticVar++;

    // Note that the static variable retains its value across function calls
}

// Call the function multiple times
demonstrateStaticVariable();
demonstrateStaticVariable();
demonstrateStaticVariable();
?>
