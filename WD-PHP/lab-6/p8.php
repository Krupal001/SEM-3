<?php
function checkNumber($number) {
if ($number < 0) {
trigger_error("Negative numbers are not allowed.", E_USER_WARNING);
} else {
echo "Entered number: $number";
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$inputNumber = $_POST["number"];
checkNumber($inputNumber);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Negative Number Check</title>
</head>
<body>
<h2>Negative Number Check</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="number">Enter a number:</label>
<input type="number" name="number" required><br>
<input type="submit" value="Check">
</form>
</body>
</html>