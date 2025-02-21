<?php

class Car 
{
    public $brand;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayCarDetails() {
        echo "make". $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br><br>";
    }

    public function startCar() {
        echo $this->make . " " . $this->model . " is starting.<br>";
    }
}

$car1 = new Car("Toyota", "Corolla", 2020);
$car2 = new Car("Ford", "Mustang", 2021);
$car3 = new Car("Honda", "Civic", 2022);

$car1->displayCarDetails();
$car1->startCar();

$car2->displayCarDetails();
$car2->startCar();

$car3->displayCarDetails();
$car3->startCar();
?>
