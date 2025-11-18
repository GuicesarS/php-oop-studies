<?php 
    class Vehicle
    {
        protected $model; // Can use this property if some class extends Vehicle. It would be like public property.
        private $year; // This property can only use inside the class that declared it.

        public function setModel($modelCar)
        {
            $this->model = $modelCar;
        }

         public function getModel()
        {
            return $this->model;
        }

        public function setYear($yearCar)
        {
            $this->year = $yearCar;
        }

        public function getYear()
        {
            return $this->year;
        }
    }

    class Car extends Vehicle {} 
    
    $car = new Car();
    $car->setModel("BWD");
    
    echo "Car info: " . $car->getModel(). "<br>";
    echo var_dump($car) . "<br>";

    $car2 = new Vehicle();
    $car2->setModel("HB20s");
    $car2->setYear(2021);

    echo "Car2 info: " . $car2->getModel(). " " . $car2->getYear(). "<br>";
    echo var_dump($car2) . "<br>";

    


?>