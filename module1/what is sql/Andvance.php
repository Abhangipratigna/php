<?php
class Car {
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }
}

// Create a Car object
$car = new Car("Toyota", "Camry", 2020);

// Access and display the brand, model, and year
echo "Brand: " . $car->getBrand() . "\n";
echo "Model: " . $car->getModel() . "\n";
echo "Year: " . $car->getYear() . "\n";

// Update the year using the setYear() method
$car->setYear(2022);

// Display the updated year
echo "Updated Year: " . $car->getYear() . "\n";
?>

