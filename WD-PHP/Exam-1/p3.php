<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="main.php">
  <input type="radio" name="gender" value="male" id="maleRadio">
  <label for="maleRadio">Male</label><br>

  <input type="radio" name="gender" value="female" id="femaleRadio">
  <label for="femaleRadio">Female</label><br>

  <input type="checkbox" name="hobby" value="reading" id="readingCheckbox">
  <label for="readingCheckbox">Reading</label><br>

  <input type="checkbox" name="hobby" value="gaming" id="gamingCheckbox">
  <label for="gamingCheckbox">Gaming</label><br>
  <button type="submit">Submit</button>
</form>

</body>
</html>