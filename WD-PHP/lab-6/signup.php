<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $username = $_POST['username'];
 $password = md5($_POST['password']); 
 $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
 $_SESSION['user_info'] = [
 'username' => $username,
 'password' => $password,
 'hobbies' => $hobbies
 ];
 header('Location: Viewhobbie.php');
 exit();
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Signup</title>
</head>
<body>
 <h2>Signup</h2>
 <form method="POST" action="">
 <label for="username">Username: </label>
 <input type="text" name="username" required><br><br>
 <label for="password">Password: </label>
 <input type="password" name="password" required><br><br>
 <label>Hobbies:</label><br>
 <input type="checkbox" name="hobbies[]" value="reading">Reading<br>
 <input type="checkbox" name="hobbies[]" value="traveling">Traveling<br>
 <input type="checkbox" name="hobbies[]" value="sports">Sports<br>
 <input type="submit" value="Signup">
 </form>
</body>
</html>