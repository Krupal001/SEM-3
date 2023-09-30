<?php
    $username=$_GET['uname'];
    $password=$_GET['pass'];
    if ($username == $password)
    {
        echo "<h1>Successfully Logged In</h1>";
        echo "<p>Welcome, $username!</p>";
    }
    else
    {
        echo "<h1>Login Failed</h1>";
        echo "<p>Invalid username or password.</p>";
    }
   ?>
