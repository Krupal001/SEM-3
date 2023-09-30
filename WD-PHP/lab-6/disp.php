<?php
session_start();
if (!isset($_SESSION['student_info'])) {
 header('Location: P1.php');
 exit();
}
$studentInfo = $_SESSION['student_info'];
?>
<!DOCTYPE html>
<html>
<head>
 <title>Student Information Display</title>
</head>
<body>
 <h2>Student Information</h2>
 <p><strong>Name:</strong> <?php echo $studentInfo['name']; ?></p>
 <p><strong>Marks:</strong></p>
 <ul>
 <li>Subject 1: <?php echo $studentInfo['marks']['subject1']; ?></li>
 <li>Subject 2: <?php echo $studentInfo['marks']['subject2']; ?></li>
 <li>Subject 3: <?php echo $studentInfo['marks']['subject3']; ?></li>
 </ul>
</body>
</html>