<?php


    class Course{

        public $coursename;
        public $no_of_year;

        function __construct($coursename,$no_of_year)
        {

            $this->coursename = $coursename;
            $this->no_of_year = $no_of_year;

        }

        function display()
        {
            echo "Name of Course is: $this->coursename <br>";
            echo "Total duration of course is $this->no_of_year years <br>";
        }

    }

    class Student extends Course
    {

            public $stud_id;
            public $stud_name;
            public $marks;

            function __construct($stud_id,$stud_name,$marks,$coursename,$no_of_year)
            {
                parent::__construct($coursename,$no_of_year);
                $this->stud_id = $stud_id;
                $this->stud_name = $stud_name;
                $this->marks = $marks;   
            }

            function calTotal()
            {
                return array_sum($this->marks);
            }

            function display()
            {

                echo "ID of Student is: $this->stud_id  <br>";
                echo "Name of Student is: $this->stud_name <br>";
                echo "Marks of Student are: ".implode(', ',$this->marks)."<br>";
                parent::display();

            }
    }

    $marks = new Student(1,'krupal',[89,88,92],'MCA',2);
    
    $marks->display();
?>