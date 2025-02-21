<?php
// date time
date_default_timezone_set("Asia/Calcutta");
echo "time is :" . date("h:i:s a") . "<br>";
echo "date is :" . date("d/m/Y") . "<br>";


 echo "Today the date is :".date("d/m/y")."<br>";
 echo "Today the date is :".date("d.m.y")."<br>";
 echo "Today the date is :".date("d-m-y")."<br>";


echo strftime('%d-%m-%y')."<br>";
echo strftime('%d/%m/%y')."<br>";

// string function
$str="chudasama niraj"."<br>";
echo strtolower($str);

$str="chudasama niraj"."<br>";
echo strtoupper($str);

$str="chudasama niraj"."<br>";
echo ucfirst($str);

$str="chudasama niraj"."<br>";
echo ucwords($str);


// function return
function display()
{
    $name="abhangi pratigna"."<br>";
    return $name;
}
echo display();


// function
function name()
{
    $name="pratigna"."<br>";
    echo $name;
}
name();

// square number
$number=3;
echo "The square of 2 is :".pow($number,2)."<br>";
echo "The square of 2 is :".pow($number,3)."<br>";
echo "The square of 2 is :".pow($number,4)."<br>";


// variable hendeling
$name=array("niraj","ajay","mihir","niva");
echo var_export($name);


$a=10;
$b=15;
if($a>$b)
{
  echo "a is greater than b";
}
else 
{
    echo "a is smaller than b";
}


class A 
{
    public function A()
    {
        echo "Hi Hiral";
    }
}

$obj=new A;





?>