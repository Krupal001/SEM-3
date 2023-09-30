<?php
function StringOp($ch, $input) {
    switch ($ch) {
        case 'reverse':
            return strrev($input);
        case 'length':
            return strlen($input);
        case 'first_word':
            $words = explode(' ', $input);
            return $words[0];
        case 'last_five_words':
            $words = explode(' ', $input);
            $lastFiveWords = array_slice($words, -5);
            return implode(' ', $lastFiveWords);
        case 'substring':
            return substr($input, 4, 11); 
        default:
            return "Invalid choice.";
    }
}

$choice = 'reverse'; 
$inputString = "Hello, DDU.";

$result =StringOp($choice, $inputString);

echo "Result: $result";
?>
