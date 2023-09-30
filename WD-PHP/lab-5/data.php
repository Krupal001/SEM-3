<?php
if($_POST)
{
echo "<h1>";
$fname=$_POST['firstName'];
$mname=$_POST['middleName'];
$lname=$_POST['lastname'];
$address=$_POST['address'];
$email=$_POST['email'];
$mobile=$_POST['mobilenumber'];
$desp=$_POST['desp'];
echo "first name:".$fname."<br>";
echo "middle name:".$mname."<br>";
echo "last name:".$lname."<br>";
echo "address:".$address."<br>";
echo "email:".$email."<br>";
echo "mobile number:".$mobile."<br>";
echo "description:".$desp."<br>";
echo "</h1>";
}
?>