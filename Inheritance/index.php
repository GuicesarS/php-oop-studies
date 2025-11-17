<?php 

    class Vehicle
    {
        public $model;
        public $color;
        public $year;

        public function Drive()
        {
            echo "Drived";

            // Add methods as needed.
        }

        public function Stop()
        {
            echo "Stoped";
        }
    }

    class Car extends Vehicle {} // is not similar to c# ":"
    class MotorCycle extends Vehicle {}
    
    $car = new Car();
    $car->model = "BWD";
    $car->color = "White";
    $car->year = "2024";

    $bike = new MotorCycle();
    $bike->model = "Fazer";
    $bike->color = "Red";
    $bike->year = "2020";

    echo $car->Drive() ."<br>";
    echo $car->Stop() ."<br>";

    echo "Car info: " . $car->model . ", " . $car->color . ", " . $car->year . "<br>";
    echo var_dump($car) . "<br>";

    echo "<br> Bike info: " . $bike->model . ", " . $bike->color . ", " . $bike->year . "<br>";
    var_dump($bike);
?>