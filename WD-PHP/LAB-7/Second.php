<?php

class Food {
    private $name;
    private $category;
    private $price;

    public function __construct($name, $category, $price) {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    public function order($quantity) {
        return $this->price * $quantity;
    }

    public function display() {
        echo "Name: " . $this->name . "<br>";
        echo "Category: " . $this->category . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }
}

if (isset($_POST['submit']) ) {
    $food1 = new Food($_POST["name1"], $_POST["category1"], $_POST["price1"]);
    $quantity1 = $_POST["quantity1"];
    $totalPrice1 = $food1->order($quantity1);

    $food2 = new Food($_POST["name2"], $_POST["category2"], $_POST["price2"]);
    $quantity2 = $_POST["quantity2"];
    $totalPrice2 = $food2->order($quantity2);

    $food3 = new Food($_POST["name3"], $_POST["category3"], $_POST["price3"]);
    $quantity3 = $_POST["quantity3"];
    $totalPrice3 = $food3->order($quantity3);

    $finalSum = $totalPrice1 + $totalPrice2 + $totalPrice3;

    echo "<h1>Food Details</h1>";
    echo "<h2>Food Item 1</h2>";
    $food1->display();
    echo "Total Price: $" . $totalPrice1 . "<br><br>";

    echo "<h2>Food Item 2</h2>";
    $food2->display();
    echo "Total Price: $" . $totalPrice2 . "<br><br>";

    echo "<h2>Food Item 3</h2>";
    $food3->display();
    echo "Total Price: $" . $totalPrice3 . "<br><br>";

    echo "<h2>Final Total Price for All Items</h2>";
    echo "Total Price: $" . $finalSum;
}
?>
