<?php

// $age1 = 18;
// $age2 = 25;
// $age3 = 40;
// $age4 = 65;

function checkAge($age) {
    if ($age < 20 || $age > 60) {
        echo "Not a valid age<br>";
    } elseif ($age >= 20 && $age <= 35) {
        echo "Age is in the range of 20 to 35<br>";
    } elseif ($age >= 36 && $age <= 55) {
        echo "Age is in the range of 36 to 55<br>";
    } else {
        echo "Age is more than 55<br>";
    }
}
checkAge(18);
checkAge(25);
checkAge(40);
checkAge(65);
?>
