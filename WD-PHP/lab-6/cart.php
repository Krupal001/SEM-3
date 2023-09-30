<?php
session_start();
if (!isset($_SESSION["username"])) {
header("Location: index.html");
exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product"]) &&
isset($_POST["quantity"])) {
$product = $_POST["product"];
$quantity = $_POST["quantity"];
$_SESSION["cart"][$product] = $quantity;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
</head>
<body>
<h2>Cart</h2>
<?php if (isset($_SESSION["cart"])): ?>
<table border="1">
<tr>
<th>Product</th>
<th>Quantity</th>
</tr>
<?php foreach ($_SESSION["cart"] as $product => $quantity): ?>
<tr>
<td><?php echo $product; ?></td>
<td><?php echo $quantity; ?></td>
</tr>
<?php endforeach; ?>
</table>
<br><br>
<a href="purchase.php">Buy</a>
<?php else: ?>
<p>No items in the cart.</p>
<?php endif; ?>
<br><br>
<a href="products.php">Back to Products</a>
<br><br>
<a href="logout.php">Logout</a>
</body>
</html>