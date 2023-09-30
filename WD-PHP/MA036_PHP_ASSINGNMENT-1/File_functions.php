<html>

<?php

echo "<h3> file exists function </h3>";
// Purpose: Checks if a file exists
echo "does the file exists? ";
echo file_exists('demo.txt');
echo "<br>";
echo"<hr>";

echo "<h3> fopen function </h3>";
// Purpose: Opens a file in read mode
echo "file will be opened <br>";
$file = fopen("demo.txt", "r");//will open file in read mode
echo"<hr>";

echo "<h3> basename function </h3>";
// Purpose: Returns the filename component of a path
$path = "C:\xampp\htdocs\ram\PHP\Assignment1\phpassignment.php";

// Show filename
echo basename($path) ."<br/>";
//

// Show filename, but cut off file extension for ".php" files
echo basename($path,".php");
echo"<hr>";

echo "<h3> dirname function </h3>";
// Purpose: Returns the directory name from a path
echo dirname("C:\xampp\htdocs\ram\PHP\Assignment1\phpassignment.php") . "<br />";
echo dirname("C:\xampp\htdocs\ram\PHP\Assignment1\phpassignment.php", 2) . "<br />";
echo dirname("\xampp\htdocs\ram\PHP\Assignment1\phpassignment.php");
echo"<hr>";

echo "<h3> copy function </h3>";
// Purpose: Copies a file from one location to another
echo "file will be copied from demo.txt to test.txt <br>";
echo copy("demo.txt","test.txt");
echo"<hr>";

echo "<h3> file_get_contents function </h3>";
// Purpose: Reads the entire contents of a file into a string
echo file_get_contents("test.txt");
echo"<hr>";

echo "<h3> file_put_contents </h3>";
// Purpose: Writes data to a file
echo file_put_contents("test.txt","Hello World. Testing!");
echo"<hr>";

echo "<h3> fileatime function </h3>";
// Purpose: Returns the last access time of a file
echo fileatime("demo.txt");
echo "<br>";
echo "Last access: ".date("F d Y H:i:s.", fileatime("demo.txt"));
echo"<hr>";

echo "<h3> filectime </h3>";
// Purpose: Returns the last change time of a file
echo filectime("demo.txt");
echo "<br>";
echo "Last changed: ".date("F d Y H:i:s.", filectime("demo.txt"));
echo "<br>";
echo"<hr>";

echo "<h3> fileowner function </h3>";
// Purpose: Returns the owner of a file
echo "The owner of the file is: ";
echo fileowner("test.txt");
echo "<br>";
echo"<hr>";

echo "<h3> fileperms function </h3>";
// Purpose: Returns the permissions of a file
echo "the permission for file test.txt is";
echo fileperms("test.txt");
echo "<br>";
echo"<hr>";

echo "<h3> filesize function </h3>";
// Purpose: Returns the size of a file in bytes
echo "The size of file test.txt is: ";
echo filesize("test.txt");
echo "<br>";
echo"<hr>";

echo "<h3> filetype function </h3>";
// Purpose: Returns the file type of a file
echo "the file type of test.txt is: ";
echo filetype("test.txt");
echo "<br>";
echo"<hr>";

echo "<h3> fgetc function </h3>";
// Purpose: Reads a character from a file
$file = fopen("test.txt","r");
echo fgetc($file);
fclose($file);
echo "<br>";
echo"<hr>";

echo "<h3> fgetcsv function </h3>";
// Purpose: Reads a line from a CSV file and returns an array
$file = fopen("demo.txt","r");
print_r(fgetcsv($file));
fclose($file);
echo "<br>";
echo"<hr>";

echo "<h3> fgets and fclose function </h3>";
// Purpose: Reads a line from a file
$file = fopen("test.txt","r");
echo fgets($file);
fclose($file);
echo "<br>";
echo"<hr>";

echo "<h3> is_dir function </h3>";
// Purpose: Checks if a path is a directory
echo "Checking is <b>xampp</b> is a directory or not";
$file = "xampp";
if(is_dir($file))
{
    echo ("$file is a directory");
}
else
{
    echo ("$file is not a directory");  
}

echo "<br>";
echo"<hr>";

echo "<h3> is_executable function </h3>";
// Purpose: Checks if a file is executable
echo "Checking if <b>setup.exe</b> is executable or not";
$file = "setup.exe";
if(is_executable($file))
{
    echo ("$file is executable");
}
else
{
    echo ("$file is not executable");
}
echo "<br>";
echo"<hr>";

echo "<h3> is_readable function </h3>";
// Purpose: Checks if a file is readable
echo "Checking if <b>test.txt</b> is readable or not";
$file = "test.txt";
if(is_readable($file))
{
    echo ("$file is readable");
}
else
{
    echo ("$file is not readable");
}

echo "<br>";
echo"<hr>";

echo "<h3> is_writable function </h3>";
// Purpose: Checks if a file is writable
echo "Checking if <b>test.txt</b> is writable or not";
$file = "test.txt";
if(is_writable($file))
{
    echo ("$file is writable");
}
else
{
    echo ("$file is not writable");
}
echo "<br>";
echo"<hr>";

echo "<h3> mkdir function </h3>";
// Purpose: Creates a directory
echo "Creating a directory name sample";
mkdir("sample");
echo "<br>";

echo "<h3> rmdir function </h3>";
// Purpose: Removes a directory
echo "Removing directory sample <br>";
$path = "sample";
if(!rmdir($path))
{
    echo ("Could not remove $path");
}
echo "<br>";
echo"<hr>";

echo "<h3> unlink function </h3>";
$file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

unlink("test.txt");

?>
</html>
