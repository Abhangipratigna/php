<?php

class calculator{

public function Add($a, $b)
{
    return $a + $b;

}

public function Add($a, $b, $c)
{
    return $a + $b + $c;

}

public function multiply($a, $b,)
{
    return $a * $b;

}

public function multiply($a, $b, $c)
{
    return $a * $b * $c;
  }
}

$cla = new Calculator();

   echo "Addition of 2 numbers: " . $calc->add(5, 10) . "<br>";  
   echo "Addition of 3 numbers: " . $calc->add(5, 10, 15) . "<br>";  

   echo "Multiplication of 2 numbers: " . $calc->multiply(5, 10) . "<br>";
   echo "Multiplication of 3 numbers: " . $calc->multiply(5, 10, 15) . "<br>";


?>
   


