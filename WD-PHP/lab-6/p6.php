<?php
// Notice Error
echo $a; // This will trigger a notice error
// Warning Error
include("nonexistentfile.php"); // This will trigger a warning error
// Fatal Error
function divideByZero() {
$r = 10 / 0; // This will trigger a fatal error (division by zero)
}
divideByZero();
?>