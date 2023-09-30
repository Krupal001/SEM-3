<!DOCTYPE html>
<html>
<head>
<title>Student Results</title>
</head>
<body>
<h2>Student Results</h2>
<?php
$examNo = $_POST["exam_no"];
$course = $_POST["course"];
$semester = $_POST["semester"];
$subject1 = $_POST["subject1"];
$subject2 = $_POST["subject2"];
$subject3 = $_POST["subject3"];
$subject4 = $_POST["subject4"];
$subject5 = $_POST["subject5"];
$photo = $_FILES["photo"];
if ($photo["error"] === UPLOAD_ERR_OK) {
$allowedTypes = array("image/jpeg");
$maxFileSize = 25 * 1024;
if (in_array($photo["type"], $allowedTypes) && $photo["size"] <= $maxFileSize) {
move_uploaded_file($photo["tmp_name"], "uploads/" . $photo["name"]);
echo "<img src='uploads/{$photo['name']}' alt='Student Photo' width='150'><br>";
} else {
echo "Invalid photo format or size.";
}
} else {
echo "Error uploading photo.";
}
echo "<p>Exam No: $examNo</p>";
echo "<p>Course: $course</p>";
echo "<p>Semester: $semester</p>";
$totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
$average = $totalMarks / 5;
echo "<p>Subject 1 Marks: $subject1</p>";
echo "<p>Subject 2 Marks: $subject2</p>";
echo "<p>Subject 3 Marks: $subject3</p>";
echo "<p>Subject 4 Marks: $subject4</p>";
echo "<p>Subject 5 Marks: $subject5</p>";
echo "<p>Total Marks: $totalMarks</p>";
echo "<p>Average Marks: $average</p>";
?>
</body>
</html>