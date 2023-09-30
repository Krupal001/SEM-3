<html>
<?php
echo '<h3> addcslashes function </h3>';
// Purpose: Quote string with slashes in a C style
$str = addcslashes("Hello World!","W");
echo($str);
echo"<hr>";

echo '<h3> bin2hex function </h3>';
// Purpose: Convert binary data into hexadecimal representation
$str = bin2hex("Hello World!");
echo($str);
echo"<hr>";
echo '<h3> chr function </h3>';
// Purpose: Return a specific character based on ASCII value
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52);
echo"<hr>";

echo '<h3> chunk_split function </h3>';
// Purpose: Split a string into smaller chunks with a delimiter
$str = "Hello world!";
echo chunk_split($str,1,".");
echo"<hr>";
echo '<h3> count_chars function </h3>';
// Purpose: Return information about characters used in a string
$str = "Hello World!";
echo count_chars($str,3);
echo"<hr>";

echo '<h3> crc32 function </h3>';
// Purpose: Calculate a 32-bit CRC (Cyclic Redundancy Check) checksum
$str = crc32("Hello World!");
printf("%u\n",$str);
echo"<hr>";

echo '<h3> explode function </h3>';
// Purpose: Split a string by a specified delimiter and return an array
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
echo"<hr>";

echo '<h3> get_html_translation_table function </h3>';
// Purpose: Return the translation table used by htmlentities and htmlspecialchars
print_r (get_html_translation_table());
echo"<hr>";

echo '<h3> hex2bin function </h3>';
// Purpose: Decode a hexadecimally encoded binary string
echo hex2bin("48656c6c6f20576f726c6421");
echo"<hr>";

echo '<h3> html_entity_decode function </h3>';
// Purpose: Convert all HTML entities to their applicable characters
$str = '<a href="https://www.google.com">Go to Google</a>';
echo html_entity_decode($str);
echo"<hr>";

echo '<h3> htmlentities function </h3>';
// Purpose: Convert all applicable characters to HTML entities
$str = '<a href="https://www.google.com">Go to Google</a>';
echo htmlentities($str);
echo"<hr>";

echo '<h3> htmlspecialchars_decode function </h3>';
// Purpose: Convert HTML entities to their corresponding characters
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);
echo"<hr>";

echo '<h3> htmlspecialchars function </h3>';
// Purpose: Convert special characters to HTML entities
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
echo"<hr>";

echo '<h3> implode/join function </h3>';
// Purpose: Join array elements with a string
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
echo"<hr>";

echo '<h3> md5 function </h3>';
// Purpose: Calculate the MD5 hash of a string
$str = "Hello";
echo md5($str);
echo"<hr>";

echo '<h3> ord function </h3>';
// Purpose: Return the ASCII value of a character
echo ord("h")."<br>";
echo ord("hello")."<br>";
echo"<hr>";

echo '<h3> printf function </h3>';
// Purpose: Output a formatted string
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);
echo"<hr>";

echo '<h3> sha1 function </h3>';
// Purpose: Calculate the SHA-1 hash of a string
$str = "Hello";
echo sha1($str);
echo"<hr>";

echo '<h3> str_getcsv function </h3>';
// Purpose: Parse a CSV string into an array
$str_CSV = '"1","PEN","red"  
           "2","Book","green"  
           ';  
$row = str_getcsv($str_CSV, "\n");  
$length = count($row);  
for($i=0;$i<$length;$i++) {  
 $data = str_getcsv($row[$i], ",");
 print_r($data);  
}
echo"<hr>";

echo '<h3> str_shuffle function </h3>';
// Purpose: Randomly shuffle the characters of a string
echo str_shuffle("Hello World");
echo"<hr>";

echo '<h3> str_split function </h3>';
// Purpose: Convert a string to an array by splitting it into substrings
print_r(str_split("Hello"));
echo"<hr>";

echo '<h3> str_word_count function </h3>';
// Purpose: Count the number of words in a string and optionally return them
echo str_word_count("Hello world!");
echo"<hr>";

echo '<h3> stripos function </h3>';
// Purpose: Find the position of the first occurrence of a case-insensitive substring
echo stripos("I love php, I love php too!","PHP");
echo"<hr>";

echo '<h3> stristr function </h3>';
// Purpose: Find the first occurrence of a case-insensitive substring
echo stristr("Hello world!","WORLD");
echo"<hr>";
echo '<h3> ucwords function </h3>';
// Purpose: Uppercase the first character of each word in a string
echo ucwords("hello world");
?>
</html>
