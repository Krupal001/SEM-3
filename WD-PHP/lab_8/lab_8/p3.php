<?php

abstract class Employee
{
    protected $name;
    protected $yoj;
    protected $dob;
    protected $depart;

    public function __construct($name,$yoj,$dob,$depart)
    {
        $this->name = $name;
        $this->yoj = $yoj;
        $this->dob = $dob;
        $this->depart = $depart;
    }

    public abstract function calculate_salary();
    public abstract function DisplayDetails();
    
}

class Manager extends Employee
{
    public $basicsalary;
    public $DA;
    public $taxAmount;
    public $HRA;

    function __construct($name,$yoj,$dob,$depart,$basicsalary,$DA,$taxAmount,$HRA)
    {
        parent::__construct($name,$yoj,$dob,$depart);
        $this->basicsalary = $basicsalary;
        $this->DA = $DA;
        $this->taxAmount = $taxAmount;
        $this->HRA = $HRA;
    }

    public function calculate_salary()
    {
        return ($this->basicsalary+$this->DA+$this->HRA-$this->taxAmount);
    }

    public function DisplayDetails()
    {
        echo "<h2>Manager Details</h2>";
        echo "<p>Name: $this->name </p>";
        echo "<p>Year of Joining: $this->yoj </p>";
        echo "<p>Date of Birth:  $this->dob </p>";
        echo "<p>Department: $this->depart </p>";
        echo "<p>Designation: Manager</p>";
        echo "<p>Salary: ".$this->calculate_salary() ."</p>";


    }
}

class Worker extends Employee
{
    public $workedHours;
    public $wagesPerHour;

    function __construct($name,$yoj,$dob,$depart,$workedHours,$wagesPerHour)
    {
        parent::__construct($name,$yoj,$dob,$depart);
        $this->workedHours = $workedHours;
        $this->wagesPerHour = $wagesPerHour;
    }

    public function calculate_salary()
    {
        return ($this->wagesPerHour*$this->workedHours);
    }

    public function DisplayDetails()
    {
        echo "<h2>Worker Details</h2>";
        echo "<p>Name: $this->name </p>";
        echo "<p>Year of Joining: $this->yoj </p>";
        echo "<p>Date of Birth:  $this->dob </p>";
        echo "<p>Department: $this->depart </p>";
        echo "<p>Designation: Worker</p>";
        echo "<p>Salary:".$this->calculate_salary()." </p>";
    }
}


$manager1 = new Manager('krupal',2022,'2000-01-01','sales',15000,1500,3000,1000);
$manager2 = new Manager('Ram',2023,'1999-02-01','Admin',20000,2500,3500,2000);

$worker1 = new Worker('Tony',2021,'2001-11-01','sales',100,100);
$worker2 = new Worker('Steve',2022,'1997-03-01','Admin',80,120);

$manager1->DisplayDetails();
$manager2->DisplayDetails();
$worker1->DisplayDetails();
$worker2->DisplayDetails();

?>