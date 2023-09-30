<?php
function customErrorHandler($errno, $errstr) {
if ($errno === E_WARNING) {
echo "Warning: $errstr<br>";
} elseif ($errno === E_ERROR) {
echo "Fatal Error: $errstr<br>";
die(); // Terminate the script on fatal error
}
}
set_error_handler("customErrorHandler");
function compareNumbers($num1, $num2) {
if (!is_numeric($num1) || !is_numeric($num2)) {
trigger_error("parameters are not numeric.", E_ERROR);
} elseif ($num1 < $num2) {
trigger_error("Warning: First parameter is less than the second parameter.", E_WARNING);
}
}
compareNumbers(5, 10);
compareNumbers("abc", 20);
?>