<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>

    <?php
    class Course {
        private $courseName;
        private $noOfYears;

        public function setCourseName($name) {
            $this->courseName = $name;
        }

        public function getCourseName() {
            return $this->courseName;
        }

        public function setNoOfYears($years) {
            $this->noOfYears = $years;
        }

        public function getNoOfYears() {
            return $this->noOfYears;
        }
    }

    class Student extends Course {
        private $name;
        private $passoutYear;
        private $resultClass;

        public function setValue($courseName, $noOfYears, $name, $passoutYear, $resultClass) {
            $this->setCourseName($courseName);
            $this->setNoOfYears($noOfYears);
            $this->name = $name;
            $this->passoutYear = $passoutYear;
            $this->resultClass = $resultClass;
        }

        public function display() {
            echo "<h2>Student Details</h2>";
            echo "Course Name: " . $this->getCourseName() . "<br>";
            echo "Number of Years: " . $this->getNoOfYears() . "<br>";
            echo "Student Name: " . $this->name . "<br>";
            echo "Passout Year: " . $this->passoutYear . "<br>";
            echo "Result Class: " . $this->resultClass . "<br><br>";
        }
    }

    // Create four different objects of the Student class and display details for each object
    $student1 = new Student();
    $student1->setValue("Computer Science", 4, "krupal", 2022, "First Class");

    $student2 = new Student();
    $student2->setValue("Mathematics", 3, "ram", 2021, "Distinction");

    $student3 = new Student();
    $student3->setValue("Physics", 4, "shaym", 2023, "Second Class");

    $student4 = new Student();
    $student4->setValue("Chemistry", 3, "ghanshyam", 2020, "Pass");

    echo "<h2>Student 1 Details</h2>";
    $student1->display();

    echo "<h2>Student 2 Details</h2>";
    $student2->display();

    echo "<h2>Student 3 Details</h2>";
    $student3->display();

    echo "<h2>Student 4 Details</h2>";
    $student4->display();
    ?>

</body>
</html>
