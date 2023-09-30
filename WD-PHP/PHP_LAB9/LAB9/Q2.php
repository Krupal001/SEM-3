<?php
interface operation
{
    function plus();
    function minus();
    function mul();
    function div();
}
class Arithmatic implements operation
{
    public $x, $y;

    function __construct($x, $y, $op)
    {
        $this->x = $x;
        $this->y = $y;

        switch ($op) {
            case '+':
                echo "Addition Result: " . $this->plus() . "</br>";
                break;
            case '-':
                echo "Subtraction Result: " . $this->minus() . "</br>";
                break;
            case '*':
                echo "Multiplication Result: " . $this->mul() . "</br>";
                break;
            case '/':
                echo "Division Result: " . $this->div() . "</br>";
                break;
            default:
                echo "Invalid operation</br>";
                break;
        }
    }

    function plus()
    {
        return $this->x + $this->y;
    }

    function minus()
    {
        return $this->x - $this->y;
    }

    function mul()
    {
        return $this->x * $this->y;
    }

    function div()
    {
        if ($this->y == 0) {
            return "Division by zero error";
        }
        return $this->x / $this->y;
    }
}

class MyString implements operation
{
    public $str1, $str2;
    function __construct($str1, $str2, $op)
    {
        $this->str1 = $str1;
        $this->str2 = $str2;
        switch ($op) {
            case '+':
                echo "Concatenation Result: " . $this->plus() . "</br>";
                break;
            case '-':
                echo "Position Result: " . $this->minus() . "</br>";
                break;
            case '*':
                echo "Count Result: " . $this->mul() . "</br>";
                break;
            case '/':
                echo "Last Word Result: " . $this->div() . "</br>";
                break;
            default:
                echo "Invalid operation</br>";
                break;
        }
    }
    function plus()
    {
        return $this->str1 . $this->str2;
    }

    function minus()
    {
        return strpos($this->str1, $this->str2);
    }
    function mul()
    {
        return substr_count($this->str1, $this->str2);
    }

    function div()
    {
        $words = explode(' ', $this->str1);
        if (!empty($words)) {
            return end($words);
        } else {
            throw new Exception("No words found in the string.");
        }
    }
}
$arithAdd = new Arithmatic(20, 50, '+');
$arithSub = new Arithmatic(30, 52, '-');
$arithMul = new Arithmatic(10, 5, '*');
$arithDiv = new Arithmatic(5, 5, '/');


$strConcat = new MyString("Hello", " World", '+');
$strPosition = new MyString("Hello World", "World", '-');
$strCount = new MyString("Hello i’m", "Krupal", '*');
$strLastWord = new MyString("Hello i’m Krupal", "", '/');
$invalidOperation = new Arithmatic(10, 5, '%');


