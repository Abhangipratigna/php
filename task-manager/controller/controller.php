<?php
error_reporting(0);
require_once("model/model.php");
class controller extends model
{
     public function __construct() {
       
        parent:: __construct();
     
             if(isset($_POST["create"]))
            {
                $new_task=$_POST["new_task"];
                $details=$_POST["details"];
                $id=$_SESSION["id"];
                $data=array("new_task"=>$new_task,"details"=>$details,"id"=>$id);
                $chk=$this->insertalldata('task',$data);
                if($chk)
                {
                    echo "<script>
                    alert('Thanks you')
                    window.location='./';
                    </script>";
                }
            }

            if(isset($_SESSION["id"]))
            {  
                $id=$_SESSION["id"];
                $shw=$this->selectalldata('task',$id);
            }
           if(isset($_POST["reg"]))
           {

            date_default_timezone_set("Asia/Calcutta");
            $email=$_POST["email"];
            $password=$_POST["password"];
            $address=$_POST["address"];
            $date=date("d/m/y H:i:s a");
            $data=array("email"=>$email,"password"=>$password,"address"=>$address,"added_date_time"=>$date);
            $chk=$this->insertalldata('users',$data);
            if($chk)
            {
                echo "<script>
                alert('users successfully created')
                window.location='./login';
                </script>";
            }
        }
        if(isset($_POST["btn-login"]))
        {
            $email=$_POST["email"];
            $password=$_POST["password"];

            $log=$this->login('users',$email,$password);  

            if($log) 
            { 
                 echo "<script>
                alert('users Logged in successfully')
                window.location='./';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('users email and password are encorrect')
                window.location='./';
                </script>";
            
            }
        }

        if(isset($_GET["logout-here"]))
        {
            $lg=$this->logout();
            if($lg) 
            {
                echo "<script>
                alert('You are Logout In successfully')
                window.location='./';
                </script>";
            }
        }



             $shw=$this->selectalldata('task');
            
             if(isset($_SERVER["PATH_INFO"]))
             {
             switch(($_SERVER["PATH_INFO"]))
            {
                    case'/':
                      require_once("index.php");
                      require_once("navbar.php");
                      require_once("content.php");
                      break; 

                      case'/create-account':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("register.php");
                        break; 

                        case'/login':
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("login.php");
                            break; 

                      default:
                      require_once("index.php");
                      require_once("navbar.php");
                      break;
            }
        }
    }
 }

$obj=new controller;
?>


