<?php
session_start();
if (!isset($_SESSION['user_info']['username'])) {
 echo "Login required";
 exit();
}
$userInfo = $_SESSION['user_info'];
$hobbies = $userInfo['hobbies'];
?>
<!DOCTYPE html>
<html>
<head>
 <title>View Hobbies</title>
</head>
<body>
 <h2>Welcome <?php echo $userInfo['username']; ?></h2>
 <h3>Your Hobbies:</h3>
 <ul>
 <?php foreach ($hobbies as $hobby) {
 echo "<li>$hobby</li>";
 } ?>
 </ul>
 <a href="SignUp.php">Sign out</a>
</body>
</html>