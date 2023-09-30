<!-- Create a class Department having property deptid,deptname, use appropriate get the property's value. 
create class Employee inherits from Department class. It have properties empid,empname.joindate. Implement 
appropriate method for getting values of Employee class's properties. Create Manager class inherited form 
Employee class. It has properties for storing salary,number of experience year and skillset. Class having a
 method to display all the information. Implement php script for given information and create two objects
 of Manager class and display informations. To achieve it implement necessary methods whenever its required. -->

 <?php

 class Department{
   public $deptid;
   public $deptname;
    function __construct($deptid,$deptname)
    {
        $this->deptid=$deptid;
        $this->deptname=$deptname;
    }
    function getdeptid(){
        return $this->deptid;
    }
    function getdeptname()
    {
        return $this->deptname;
    }
 }
 class Employee extends Department{
   public $empid;
   public $empname;
   public $joindate;
    function __construct($deptid,$deptname,$empid,$empname,$joindate){
        parent::__construct($deptid,$deptname);
        $this->empid=$empid;
        $this->empname=$empname;
        $this->joindate=$joindate;
    }
    public function getEmpId() {
        return $this->empid;
    }

    public function getEmpName() {
        return $this->empname;
    }

    public function getJoinDate() {
        return $this->joindate;
    }
}

class Manager extends Employee {
    private $salary;
    private $experienceYears;
    private $skillset;

    public function __construct($deptid, $deptname, $empid, $empname, $joindate, $salary, $experienceYears, $skillset) {
        parent::__construct($deptid, $deptname, $empid, $empname, $joindate);
        $this->salary = $salary;
        $this->experienceYears = $experienceYears;
        $this->skillset = $skillset;
    }

    public function displayInfo() {
        echo "Department ID: " . $this->getDeptId() . "<br>";
        echo "Department Name: " . $this->getDeptName() . "<br>";
        echo "Employee ID: " . $this->getEmpId() . "<br>";
        echo "Employee Name: " . $this->getEmpName() . "<br>";
        echo "Join Date: " . $this->getJoinDate() . "<br>";
        echo "Salary: $" . $this->salary . "<br>";
        echo "Experience Years: " . $this->experienceYears . " years<br>";
        echo "Skillset: " . $this->skillset . "<br><br>";
    }
}

// Create two Manager objects
$manager1 = new Manager(101, "HR", 1001, "John Doe", "2023-01-15", 75000, 5, "Leadership, Communication");
$manager2 = new Manager(102, "Finance", 1002, "Jane Smith", "2022-09-20", 80000, 7, "Financial Analysis, Budgeting");

// Display information for the managers
$manager1->displayInfo();
$manager2->displayInfo();

 ?>