<?php


    class Shape
    {
        function area()
        {

            echo "This is area() method of shape class which will be override in child class <br>";
            //Override in child class
        }
    }

    class Circle extends Shape
    {
        public $radius;

        function __construct($radius)
        {
            $this->radius = $radius;
        }

        function area()
        {
            $area = 3.14*($this->radius*$this->radius);
            return $area;
        }
    }

    class Square extends Shape
    {
        public $length;
        function __construct($length)
        {
            $this->length = $length;
        }

        function area()
        {
            $area = $this->length*$this->length;
            return $area;
        }
    }

    class Rectangle extends Shape
    {
        public $length,$width;
        function __construct($length,$width)
        {
            $this->length = $length;
            $this->width = $width;
        }

        function area()
        {
            $area = $this->length*$this->width;
            return $area;
        }
    }


    $sh = new Shape();
    $area = $sh->area();
    print($area);
    $cir = new Circle(10);
    $area = $cir->area();
    print("Area of Circle is: $area <br>");
    $sqr = new Square(20);
    $area = $sqr->area();
    print("Area of Square is: $area <br>");
    $rect = new Rectangle(10,13);
    $area = $rect->area();
    print("Area of Rectangle  is: $area <br>");
?>