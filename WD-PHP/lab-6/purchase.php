<?php
session_start();
if (!isset($_SESSION["username"])) {
header("Location: p4.html");
exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["cart"])) {
$totalItems = array_sum($_SESSION["cart"]);
$message = "Thank you for purchasing $totalItems item(s)!";
unset($_SESSION["cart"]);
} else {
$message = "No items purchased.";
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Message</title>
</head>
<body>
<h2>order Successfully received</h2>
<p><?php echo $message; ?></p>
<br><br>
<a href="products.php">Back to Products</a>
<br><br>
<a href="logout.php">Logout</a>
</body>
</html>