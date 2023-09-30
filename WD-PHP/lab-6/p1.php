<!DOCTYPE html>
<html>
<head>
 <title>Student Information</title>
</head>
<body>
 <h2>Enter Student Information</h2>
 <form method="POST" action="">
 <label for="name">Name: </label>
 <input type="text" name="name" required><br><br>
 <label for="subject1">Marks for Subject 1: </label>
 <input type="number" name="subject1" required><br><br>
 <label for="subject2">Marks for Subject 2: </label>
 <input type="number" name="subject2" required><br><br>
 <label for="subject3">Marks for Subject 3: </label>
 <input type="number" name="subject3" required><br><br>
 <input type="submit" value="Submit">
 </form>
</body>
</html>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $name = $_POST['name'];
 $marks = [
 'subject1' => $_POST['subject1'],
 'subject2' => $_POST['subject2'],
 'subject3' => $_POST['subject3']
 ];
 $_SESSION['student_info'] = [
 'name' => $name,
 'marks' => $marks
 ];
 header('Location: disp.php');
 exit();
}
?>
