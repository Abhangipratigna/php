<?php
require_once("model/model.php");
class controller extends model
{
     public function __construct() {

        parent:: __construct();
        if(isset($_SERVER["PATH_INFO"])){

            if(isset($_POST["create"]))
            {
                $new_task=$_POST["new_task"];
                $details=$_POST["details"];
                $data=array("new_task"=>$new_task,"details"=>$details);
                $chk=$this->insertalldata('task',$data);
                if($chk)
                {
                    echo "<script>
                    alert('Thanks you')
                    window.location='./';
                    </script>";
                }
            }

            $shw=$this->selectalldata('task');


            switch(($_SERVER["PATH_INFO"]))
            {
                    case'/':
                      require_once("index.php");
                      require_once("navbar.php");
                      require_once("content.php");
                      break; 

                      default:
                      require_once("index.php");
                      require_once("navbar.php");
            }
        }
    }
}

$obj=new controller;
?>

