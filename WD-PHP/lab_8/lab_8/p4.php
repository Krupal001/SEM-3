<?php


class Item
{


    public $ItemName;
    public $ItemNo;

    function __construct($ItemName,$ItemNo)
    {

        $this->ItemName = $ItemName;
        $this->ItemNo = $ItemNo;
        
    }

    function display()
    {
        echo "Item Name is $this->ItemName <br>";
        echo "Item Number is $this->ItemNo <br>";
    }

}

class Category extends Item
{

    public $categoryName;
    public $subCategory;
    public $price;

    function __construct($ItemName,$ItemNo,$categoryName,$subCategory,$price)
    {
        parent::__construct($ItemName,$ItemNo);
        $this->categoryName = $propertyName;
        $this->subCategory = $subCategory;
        $this->price = $price;
    }

    function getPrice()
    {

        return $this->price;
    }

    function displayItem()
    {

        echo "Category is $this->categoryName <br>";
        echo "SubCategory is $this->subCategory <br>";
        echo "Price is $this->price <br>";

    }

}

class purchase extends Item
{

    public $purchaseId;
    public $totalamount;
    public $quantity;

    public function __construct($ItemName, $ItemNo, $purchaseId, $totalamount, $quantity) {
        parent::__construct($ItemName, $ItemNo);
        $this->purchaseId = $purchaseId;
        $this->totalamount = $totalamount;
        $this->quantity = $quantity;
    }

    public function calculate_order_amount() {
        return $this->quantity * $this->totalamount;
    }

    public function display_purchase() {
        parent::display();
        echo "Purchase ID: $this->purchaseId <br>";
        echo "Total Amount: $this->totalamount <br>";
        echo "Quantity: $this->quantity <br>";
    }



}


$purchase = new Purchase("Item 123", "123456", "P001", 25.99, 5);
$totalAmount = $purchase->calculate_order_amount();
echo "Purchase Details:\n";
$purchase->display_purchase();
echo "Total Order Amount: $totalAmount <br>";
?>