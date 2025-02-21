<?php
require_once("model/model.php");
class controller extends model
{
     public function __construct() {

        parent:: __construct();
        if(isset($_SERVER["PATH_INFO"])){

                if(isset($_POST["add_items"]))
            {
                $name=$_POST["name"];
                $Email=$_POST["Email"];
                $phone=$_POST["phone"];
                $pin=$_POST["pin"];
                $Age=$_POST["Age"];
                $Address=$_POST["Address"];

                $data=array("name"=>$name,"Email"=>$Email,"phone"=>$phone,"pin"=>$pin,"Age"=>$Age,"Address"=>$Address);
                $chk=$this->insertalldata('add_items',$data);
                if($chk)
                {
                    echo "<script>
                    alert('your data is successfully added')
                    window.location='./';
                    </script>";
                }
            }

           

             // display all employee logic 

             $shw_data=$this->selectalldata('add_items');

             
 
                switch(($_SERVER["PATH_INFO"]))
                {
                        case'/':
                          require_once("index.php");
                          require_once("display.php");
                          break; 
                                
                          case'/add_items':
                          require_once("index.php");
                          require_once("add_items.php");
                          break; 

                        
                          case'/display':
                          require_once("index.php");
                          require_once("display.php");
                          break; 

                         
                      
                        default:
                          require_once("index.php");
                          require_once("404.php");
                          break; 

                }
        } 

        }

}
$obj=new controller;
?>



