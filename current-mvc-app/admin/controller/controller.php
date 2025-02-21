<?php
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {
        parent:: __construct();
        if(isset($_SERVER["PATH_INFO"]));
        {  
            // if(isset($_POST["send"]))
            // {
                
            //     date_default_timezone_set("Asia/Calcutta");
            //     $name=$_POST["name"];
            //     $email=$_POST["email"];
            //     $password=base64_encode($_POST["password"]);
            //     $mobile=$_POST["phone"];
            //     $date_time=date("d/m/y H:i:s a");
            //     $data=array("name"=>$name,"email"=>$email,"phone"=>$mobile,"password"=>$password,"add_data_time"=>$date_time);
            //     $chk=$this->insertalldata('tbl_contactus',$data);
            //     if($chk)
            //     {
            //         echo "<script>
            //         alert('thanks for contact with us we will contact with you soon')
            //         window.location='./contactaus';
            //         </script>";

            //     }
            // }

            // $shwdata=$this->selectalldata('tbl_addemployee');
            // $countalldata=$this->countalldata('tbl_addemployee','empid');           
        
            $shwcontact=$this->selectalldata('tbl_contactus');
            $countalldata=$this->countalldata('tbl_contactus','contact_id');

            if(isset($_POST["admin_login"]))
            {
                $email=$_POST["email"];
                $password=$_POST["password"];
                $chk=$this->adminlogin('tbl_admin',$email,$password);
                if($chk)
                {
                    echo "<script>
                    alert ('you are logout in as admin successfully')
                    window.location='./';
                    </script>";
                }
                else
                {
                    echo "<script>
                    alert ('your email and password are incorrect try again')
                    window.location='./';
                    </script>";
                }
                
                }
            
            if(isset($_GET["logout-here"]))
            {
                $chk=$this->logout();
                if($chk)
                {
                    echo "<script>
                    alert ('you are logout in as admin successfully')
                    window.location='./';
                    </script>";
                }
            }



            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("login.php");
                    break;

                    case '/dashboard':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("sidebar.php");
                        require_once("dashboard.php");
                        require_once("footer.php");
                        break;
    
                        case '/managecontact':
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("sidebar.php");
                            require_once("managecontact.php");
                            require_once("footer.php");
                            break;
                       
                    default:
                        require_once("index.php");
                        break;
                    
            }
        }
    }
}

$obj=new controller;

?> 



