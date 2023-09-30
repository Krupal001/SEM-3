<?php
function calculateOperations(...$numbers) {
    $sum = 0;
    $product = 1;
    $intCount = 0;
    $floatCount = 0;

    foreach ($numbers as $num) {
        $sum += $num;
        $product *= $num;

        if (is_int($num)) {
            $intCount++;
        } elseif (is_float($num)) {
            $floatCount++;
        }
    }

    return [
        'sum' => $sum,
        'product' => $product,
        'intCount' => $intCount,
        'floatCount' => $floatCount
    ];
}

// Example usage
$result = calculateOperations(2, 3.5, 1, 4.2, 5);

echo "Sum: " . $result['sum'] . "<br>";
echo "Product: " . $result['product'] . "<br>";
echo "Count of integers: " . $result['intCount'] . "<br>";
echo "Count of floats: " . $result['floatCount'] . "<br>";
?>
