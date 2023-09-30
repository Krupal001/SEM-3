<?php
// Declare two global variables
$Var1 = "I am a global variable 1";
$Var2 = "I am a global variable 2";

function GlobalScope() {
    // Accessing global variables inside the function
    global $Var1;
    echo "Inside function: " . $Var1 . "<br>";
    echo "Inside function: " . $Var2 . "<br>";

    // Modifying  variable inside the function
    $Var1 = "Modified  variable 1";
}

// Call the function
GlobalScope();

// Accessing modified  variable outside the function
echo "Outside function: " . $Var1 . "<br>";

// Attempt to access non- variable outside its scope (will cause an error)
echo "Outside function: " . $Var2 . "<br>";
?>
