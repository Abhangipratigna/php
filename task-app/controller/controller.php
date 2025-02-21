<?php 
error_reporting(0);
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        session_start();
        parent:: __construct();
        // insert data 
        if(isset($_POST["add-task"]))
        {
            $name=$_POST["new-task"];
            $taskdetail=$_POST["new-task-detail"];
            $uid=$_SESSION["uid"];
            $data=array("name"=>$name,"details"=>$taskdetail,"uid"=>$uid);
            $chk=$this->insertalldata('task',$data);
     
            if($chk)
            {

                echo "<script>
                alert('task added')
                window.location='./';
                </script>";
            }
        }

        // display all logic of data or task
        if(isset($_SESSION["uid"]))
        {
        $uid=$_SESSION["uid"];    
        $shw=$this->shwdata('task',$uid);
        }
        
        // add or create a new users account
        if(isset($_POST["reg"]))
        {
            date_default_timezone_set("Asia/Calcutta");
            $email=$_POST["email"];
            $pwd=$_POST["password"];
            $add=$_POST["address"];
            $date=date("d/m/y H:i:s a");
            $data=array("email"=>$email,"password"=>$pwd,"address"=>$add,"added_date_time"=>$date);
            $chk=$this->insertalldata('tbl_users',$data);
            if($chk)
            {
                echo "<script>
                alert('users successfully created')
                window.location='./login';
                </script>";
            }
        }

        // create for login as users
        if(isset($_POST["btn-login"]))
        {
            $email=$_POST["email"];
            $password=$_POST["password"];
            $log=$this->login('tbl_users',$email,$password);  
            if($log) 
            {
                echo "<script>
                alert('You are Logged In successfully created')
                window.location='./';
                </script>";
            }
            else 
            {
                echo "<script>
                alert('users email and Password are wrong')
                window.location='./login';
                </script>";
            
            }
        }

        // logout here
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

        // routing here
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    break;
                    case '/create-account':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("register.php");
                        break;

                        case '/login':
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("login.php");
                            break;
                default :
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    break;
            }
        }
     
    }
    
}
$obj=new controller;
?>