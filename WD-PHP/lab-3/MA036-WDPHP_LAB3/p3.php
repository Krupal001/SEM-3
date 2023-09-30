<?php
$items = [
    [
        'Item' => 'Item1',
        'Price' => 100,
        'Quantity' => 12,
    ],
    [
        'Item' => 'Item2',
        'Price' => 250,
        'Quantity' => 10,
    ],
    [
        'Item' => 'Item3',
        'Price' => 80,
        'Quantity' => 5,
    ],
    [
        'Item' => 'Item4',
        'Price' => 150,
        'Quantity' => 8,
    ],
    [
        'Item' => 'Item5',
        'Price' => 300,
        'Quantity' => 15,
    ],
];

echo "Item Information:<br>";
echo "+------+-------+----------+<br>";
echo "| Item | Price | Quantity |<br>";
echo "+------+-------+----------+<br>";
foreach ($items as $item) {
    printf("| %s |  %d  | &nbsp %d <br>", $item['Item'], $item['Price'], $item['Quantity']);
}
echo "+------+-------+----------+<br>";
?>
