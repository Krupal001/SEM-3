<?php
session_start();
if (!isset($_SESSION["username"])) {
header("Location: index.html");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>
<h2>Products</h2>
<form action="cart.php" method="post">
<label for="product">Select a product:</label>
<select name="product">
<option value="product1">Product 1</option>
<option value="product2">Product 2</option>
</select><br><br>
<label for="quantity">Quantity:</label>
<input type="number" name="quantity" required><br><br>
<input type="submit" value="Add to Cart">
</form><br>
<a href="cart.php">View Cart</a>
<br><br>
<a href="logout.php">Logout</a>
</body>
</html>