<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Student Information Display</title>
</head>
<body>
<?php
if (isset($_POST))
{
$name = $_POST['name'];
$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
// Set cookies
setcookie('name', $name, time() + (86400 * 30), '/');
setcookie('subject1',$subject1,time()+(86400 * 30),
'/');
setcookie('subject2',$subject2,time()+(86400 * 30),
'/');
setcookie('subject3',$subject3,time()+(86400 * 30),
'/');
echo "<h2>Student Information</h2>";
echo "<p>Name: " . $name . "</p>";
echo "<p>Subject 1 Marks: " . $subject1 . "</p>";
echo "<p>Subject 2 Marks: " . $subject2 . "</p>";
echo "<p>Subject 3 Marks: " . $subject3 . "</p>";
}
else
{
echo "<p>No student data available.</p>";
}
?>
</body>
</html>