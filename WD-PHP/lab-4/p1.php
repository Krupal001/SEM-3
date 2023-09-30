<?php
function ArithmeticOperation($value1, $value2, $op) {
    switch ($op) {
        case '+':
            return $value1 + $value2;
        case '-':
            return $value1 - $value2;
        case '*':
            return $value1 * $value2;
        case '/':
                return $value1 / $value2;
        default:
            return "Invalid operation choice.";
    }
}

$value1 = 10;
$value2 = 5;
$op = '-'; 

$result = ArithmeticOperation($value1, $value2, $op);

echo "Result of $value1 $op $value2 is: $result";
?>
