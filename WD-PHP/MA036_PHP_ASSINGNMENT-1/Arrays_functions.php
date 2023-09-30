<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<h3> array_change_key_case function </h3>";
// Purpose: Changes the case of all keys in an array
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
echo"<hr>";

echo "<h3> array_chunk function </h3>";
// Purpose: Splits an array into chunks of a specified size
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
echo"<hr>";

echo "<h3> array_combine function </h3>";
// Purpose: Creates an array by using one array for keys and another for its values
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);
echo"<hr>";

echo "<h3> array_diff function </h3>";
// Purpose: Computes the difference between arrays
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
echo"<hr>";

echo "<h3> array_diff_assoc function </h3>";
// Purpose: Computes the difference of arrays with additional index check
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);
echo"<hr>";

echo "<h3> array_diff_key function </h3>";
// Purpose: Computes the difference of arrays using keys for comparison
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
echo"<hr>";

echo "<h3> array_fill function </h3>";
// Purpose: Fills an array with values
$a1=array_fill(3,4,"blue");
print_r($a1);
echo"<hr>";

echo "<h3>array_intersect function </h3>";
// Purpose: Computes the intersection of arrays
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);
echo"<hr>";
echo "<h3> array_key_exists function </h3";
// Purpose: Checks if a specific key exists in an array
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
{
    echo "Key exists!";
}
else
{
    echo "Key does not exist!";
}
echo"<hr>";
echo "<h3> array_keys function </h3>";
// Purpose: Returns all the keys from an array
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
echo"<hr>";

echo "<h3> array_merge function </h3>";
// Purpose: Merges one or more arrays into a single array
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
echo"<hr>";

echo "<h3> array_merge_recursive function </h3>";
// Purpose: Recursively merges one or more arrays into a single array
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));
echo"<hr>";

echo "<h3> array_pop function </h3>";
// Purpose: Removes and returns the last element from an array
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo"<hr>";

echo "<h3> array_push function </h3>";
// Purpose: Pushes one or more elements onto the end of an array
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo"<hr>";

echo "<h3> array_rand function </h3>";
// Purpose: Picks one or more random keys from an array
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
echo"<hr>";

echo "<h3> array_shift function </h3>";
// Purpose: Removes and returns the first element from an array
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
print_r ($a);
echo"<hr>";

echo "<h3> array_slice function </h3>";
// Purpose: Extracts a slice of an array
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
echo"<hr>";

echo "<h3> array_sum function </h3>";
// Purpose: Returns the sum of all values in an array
$a=array(5,15,25);
echo array_sum($a);
echo"<hr>";

echo "<h3> array_walk function </h3>";
// Purpose: Applies a user-defined function to each element of an array
function myfunction($value,$key)
{
    echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
echo"<hr>";

echo "<h3> arsort function </h3>";
// Purpose: Sorts an associative array in reverse order according to its values
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo"<hr>";

echo "<h3> current and end function </h3>";
// Purpose: Retrieves the current element in an array and moves the array pointer to the next element
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo current($people) . "<br>";
echo end($people);
echo"<hr>";

echo "<h3> krsort function </h3>";
// Purpose: Sorts an associative array in reverse order according to its keys
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo"<hr>";

echo "<h3> next, pos, prev, and reset function </h3>";
// Purpose: Manipulate the array pointer to navigate through an array
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo next($people);
echo pos($people) . "<br>";
echo prev($people);
echo reset($people);
echo"<hr>";

echo "<h3> range function  </h3>";
// Purpose: Create an array containing a range of elements
$number = range(0,5);
print_r ($number);
echo"<hr>";

echo "<h3> shuffle function </h3>";
// Purpose: Shuffle the elements of an array randomly
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);

?>

</body>
</html>

