<?php

class employee
{

    public function employeeData(int $num,  string $text, array $name,  float $decimal)
    {
         echo "integer :$num<br>";
         echo "string :$text<br>";
         echo "Array: " . implode(", ", $name) . "<br>";
         echo "float :$decimal<br>";

    }
}

$employee = new employee();
$employee->employeeData(23, "Abhangi Pratigna", ["Niraj", "Niva", "Jay"], 3.14);


?>







