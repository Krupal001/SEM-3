<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .info-container {
            text-align: center;
            background-color: #3498db;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            color: #fff;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
    
    $name = "Krupal Pandya";
    $rollNumber = "MA036";
    $sem2SPI = 7.0;
    ?>

    <div class="info-container">
        <h1>Student Information</h1>
        <p>Name: <?php echo $name; ?></p>
        <p>Roll Number: <?php echo $rollNumber; ?></p>
        <p>Semester 2 SPI: <?php echo $sem2SPI; ?></p>
    </div>
</body>
</html>
