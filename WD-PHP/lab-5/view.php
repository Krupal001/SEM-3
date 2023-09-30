<?php
if(isset($_POST))
{
$username=$_POST['username'];
$age=$_POST['age'];
$city=$_POST['city'];
setcookie('username',$username,time() + (86400 * 30),'/');
setcookie('age',$age,time() + (86400 * 30),'/');
setcookie('city',$city,time() + (86400 * 30),'/');
echo "<h2>User Profile</h2>";
echo "<p>Username: " . $username . "</p>";
echo "<p>Age: " . $age . "</p>";
echo "<p>City: " . $city . "</p>";
}
else
{
echo "<p>No user data available.</p>";
}
?>