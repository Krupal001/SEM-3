<?php
// Changing integer to string
$integerValue = 42;
$stringValue = (string)$integerValue;

// Changing string to integer
$stringValue2 = "73";
$integerValue2 = (int)$stringValue2;

// Changing Boolean to integer
$boolValue = true;
$integerValue3 = (int)$boolValue;

// Changing integer to float
$integerValue4 = 100;
$floatValue = (float)$integerValue4;

// Changing float to integer
$floatValue2 = 3.14;
$integerValue5 = (int)$floatValue2;

// Displaying the new data types
echo "Integer to String " .var_dump( $stringValue )."<br>";
echo "String to Integer: " .var_dump( $integerValue2 ). "<br>";
echo "Boolean to Integer: " . var_dump($integerValue3) . "<br>";
echo "Integer to Float: " . var_dump($floatValue ). "<br>";
echo "Float to Integer: " . var_dump($integerValue5) . "<br>";
?>
