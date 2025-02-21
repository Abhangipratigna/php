<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
    

    if(isset($_POST["chk"]))
    {
        $a=$_POST["a"];
        $b=$_POST["b"];

        $temp=$a;
        $a=$b;
        $b=$temp;
        echo "<h4 align='center'>"."After swap a values is :".$a." and b values  is :".$b."</h4>";
    }

    }
}
$obj=new controller;

?>