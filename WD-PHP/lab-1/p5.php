<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Fair Registration</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
}

.container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

form {
  display: grid;
  grid-gap: 10px;
}

label {
  font-weight: bold;
  margin:0 60px;
}

input,
select,
textarea {
  width: 80%;
  padding: 10px;
  margin:0 60px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}


  </style>
</head>

<body>
  <div class="container">
    <h1>University Fair Registration</h1>
    <form action="submit.php" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="branch">Branch:</label>
      <input type="text" id="branch" name="branch" required>

      <label for="semester">Semester:</label>
      <input type="number" min="1" max="4" id="semester" name="semester" required>

      <label for="roll-number">Roll Number:</label>
      <input type="text" id="roll-number" name="roll-number" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="contact-number">Contact Number:</label>
      <input type="tel" id="contact-number" name="contact-number" required>

      <label for="subject-of-interest">Subject of Interest:</label>
      <select id="subject-of-interest" name="subject-of-interest" required>
        <option value="">Select One</option>
        <option value="Cultural">Cultural</option>
        <option value="Web Publishing">Web Publishing</option>
        <option value="Technical">Technical</option>
        <option value="Finance">Finance</option>
        <option value="Publication">Publication</option>
        <option value="Reception and Hosting">Reception and Hosting</option>
      </select>

      <label for="past-experience">Past Experience (if any):</label>
      <textarea id="past-experience" name="past-experience" rows="4"></textarea>

      <label for="signature">Signature:</label>
      <input type="file" id="signature" name="signature" required>
    </form>
  </div>
</body>

</html>
