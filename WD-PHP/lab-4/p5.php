<?php
$string = "apple,banana,orange";
$pieces = explode(",", $string);
echo "explode: ";
print_r($pieces);
echo "<br>";

$pieces = array("apple", "banana", "orange");
$mergedString = implode(",", $pieces);
echo "implode/join: $mergedString<br>";

$string = "Hello World";
$length = strlen($string);
echo "strlen: $length<br>";

$string = "Hello World";
$splitArray = str_split($string);
echo "Original String: $string<br>";
echo "str_split: ";
print_r($splitArray);

$string = "Hello World";
$reversedString = strrev($string);
echo "Original String: $string<br>";
echo "Reversed String: $reversedString";

$string = "Hello World";
$position = strpos($string, "World");
echo $position;
?>