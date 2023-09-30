<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Number Sum Result</title>
</head>
<body>
<?php
if (isset($_POST['numbers']))
{
$numbersString = $_POST['numbers'];
$numbersArray = explode(',', $numbersString);
$numbersArray = array_map('intval', array_map('trim',
$numbersArray));
$sum = array_sum($numbersArray);
echo "<p>Entered Numbers: " . implode(', ',
$numbersArray) . "</p>";
echo "<p>Sum: " . $sum . "</p>";
} else
{
echo "<p>No numbers entered.</p>";
}
?>
</body>
</html>