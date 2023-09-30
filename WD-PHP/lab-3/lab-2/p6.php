<?php
// Declare a string variable
$string = "Hello, World!";

// String length
$length = strlen($string);

// Convert to uppercase
$uppercase = strtoupper($string);

// Convert to lowercase
$lowercase = strtolower($string);

// Substring
$substring = substr($string, 0, 5); // Extracts first 5 characters

// Concatenation
$concatenated = $string . " Welcome to PHP!";

// Replace
$replaced = str_replace("World", "PHP", $string);

// Check if a substring exists
$substringExists = strpos($string, "Hello");

echo "Original String: " . $string . "<br>";
echo "String Length: " . $length . "<br>";
echo "Uppercase: " . $uppercase . "<br>";
echo "Lowercase: " . $lowercase . "<br>";
echo "Substring: " . $substring . "<br>";
echo "Concatenated: " . $concatenated . "<br>";
echo "Replaced: " . $replaced . "<br>";
echo "Substring exists: " . ($substringExists) . "<br>";
?>
