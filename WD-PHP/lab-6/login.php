<?php
session_start();
$validUsers = [
"user1" => "password1",
"user2" => "password2"
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$password = $_POST["password"];
if (isset($validUsers[$username]) && $validUsers[$username] === $password) {
$_SESSION["username"] = $username;
header("Location: products.php");
exit();
} else {
echo "Invalid username or password.";
}
}
?>