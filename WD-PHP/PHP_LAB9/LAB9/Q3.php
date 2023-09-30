<?php
class Employee
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function display()
    {
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
    }
}

class Developer extends Employee
{
    private $skills = [];
    private $salary;
    private $degree;

    public function __construct($name, $age, $skills, $salary, $degree)
    {
        parent::__construct($name, $age);
        $this->skills = $skills;
        $this->salary = $salary;
        $this->degree = $degree;
    }

    public function disp_salary()
    {
        echo "Salary: $this->salary<br>";
    }

    public function disp_skill()
    {
        echo "Skills: " . implode(", ", $this->skills) . "<br>";
        echo "Degree: $this->degree<br>";
    }
}

class Worker extends Employee
{
    private $working_hours;
    private $per_hour_price;

    public function __construct($name, $age, $working_hours, $per_hour_price)
    {
        parent::__construct($name, $age);
        $this->working_hours = $working_hours;
        $this->per_hour_price = $per_hour_price;
    }

    public function calsalary()
    {
        return $this->working_hours * $this->per_hour_price;
    }

    public function dispsalary()
    {
        echo "Salary: " . $this->calsalary() . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $employee_type = $_POST["employee_type"];

    if ($employee_type == "Developer") {
        // Example Developer data
        $skills = ["PHP", "JavaScript"];
        $salary = 60000;
        $degree = "Bachelor's in Computer Science";

        $developer = new Developer($name, $age, $skills, $salary, $degree);

        echo "<h2>Developer Details</h2>";
        $developer->display();
        $developer->disp_skill();
        $developer->disp_salary();
    } elseif ($employee_type == "Worker") {
        // Example Worker data
        $working_hours = 40;
        $per_hour_price = 15;

        $worker = new Worker($name, $age, $working_hours, $per_hour_price);

        echo "<h2>Worker Details</h2>";
        $worker->display();
        $worker->dispsalary();
    } else {
        echo "Invalid employee type selected.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Employee Details</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="name">Employee Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="employee_type">Employee Type:</label>
                <select class="form-control" id="employee_type" name="employee_type">
                    <option value="Developer">Developer</option>
                    <option value="Worker">Worker</option>
                </select>
            </div>

            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery (for optional Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>