<?php

class Vehicle {
    protected $prodYear;
    protected $companyName;

    protected function setValues($prodYear, $companyName) {
        $this->prodYear = $prodYear;
        $this->companyName = $companyName;
    }

    protected function getValues() {
        return "Production Year: " . $this->prodYear . "<br>" .
               "Company Name: " . $this->companyName . "<br>";
    }
}

class TwoWheeler extends Vehicle {
    private $nameOfVehicle;
    private $color;

    public function setValues($prodYear, $companyName, $nameOfVehicle, $color) {
        parent::setValues($prodYear, $companyName);
        $this->nameOfVehicle = $nameOfVehicle;
        $this->color = $color;
    }

    public function getValues() {
        $parentValues = parent::getValues();
        return $parentValues .
               "Name of Vehicle: " . $this->nameOfVehicle . "<br>" .
               "Color: " . $this->color . "<br>";
    }
}

class FourWheeler extends Vehicle {
    private $vehicleName;
    private $color;
    private $price;
    private $tollTaxRate;

    public function __construct($prodYear, $companyName, $vehicleName, $color, $price, $tollTaxRate) {
        parent::setValues($prodYear, $companyName);
        $this->vehicleName = $vehicleName;
        $this->color = $color;
        $this->price = $price;
        $this->tollTaxRate = $tollTaxRate;
    }

    public function display() {
        $parentValues = parent::getValues();
        echo $parentValues .
             "Vehicle Name: " . $this->vehicleName . "<br>" .
             "Color: " . $this->color . "<br>" .
             "Price: $" . $this->price . "<br>" .
             "Toll Tax Rate: " . $this->tollTaxRate . "%<br>";
    }
}

$twoWheeler = new TwoWheeler();
$twoWheeler->setValues(2022, "Honda", "CBR 250R", "Red");
echo "<h2>Two Wheeler Details</h2>";
echo $twoWheeler->getValues();

$fourWheeler = new FourWheeler(2023, "Toyota", "Camry", "Silver", 35000, 5.5);
echo "<h2>Four Wheeler Details</h2>";
$fourWheeler->display();


?>