<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Media Registration</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
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
textarea {
  width: 80%;
  padding: 10px;
  margin:0 60px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  width:83%;
  margin:0 60px;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}


  </style>
</head>

<body>
  <div class="container">
    <h1>Social Media Registration</h1>   
    <form action="submit.html" method="get" id="registrationForm">
      <label for="first-name">First Name:</label>
      <input type="text" id="first_name" name="first_name" required>

      <label for="middle-name">Middle Name:</label>
      <input type="text" id="middle_name" name="middle_name">

      <label for="last-name">Last Name:</label>
      <input type="text" id="last_name" name="last_name" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="mobile-number">Mobile Number:</label>
      <input type="tel" id="mobile_number" name="mobile_number" required>

      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="4"></textarea>

      <input type="button" value="Submit" onclick="submitForm()">
    </form>

    <div id="displayInfo">
        <!-- Submitted information will be displayed here -->
    </div>

    <script>
        function submitForm() {
            // Get form data
            const formData = new FormData(document.getElementById('registrationForm'));

            // Convert form data to URL-encoded string
            const urlParams = new URLSearchParams(formData).toString();

            // Display the submitted information
            const displayInfo = document.getElementById('displayInfo');
            window.location.href = "submit.html?" + urlParams;
        }
    </script>

  </div>
</body>

</html>
