<?php

class A 
{
    public function __construct($a,$b)
    {
        $c=$a+$b;
        echo "Additions of number: ",$c;

    }
}

$obj=new A(20,30);


?>