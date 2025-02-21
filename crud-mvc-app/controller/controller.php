<?php 
// error_reporting(0);
require_once("model/model.php");
class Controller extends Model 
{
    public function __construct()
    {
        parent:: __construct();
        session_start();
        // load our view create a routing
        if(isset($_SERVER["PATH_INFO"]))
        {
            // create a logic to add contacts all data in tables 
            if(isset($_POST["send"]))
            {
                date_default_timezone_set("Asia/Calcutta");
                $name=$_POST["name"];
                $email=$_POST["email"];
                $mobile=$_POST["phone"];
                $subject=$_POST["subject"];
                $message=$_POST["message"];
                $date_time=date("d/m/Y H:i:s a");
                $data=array("name"=>$name,"email"=>$email,"phone"=>$mobile,"subject"=>$subject,"message"=>$message,"added_date_time"=>$date_time);
                $chk=$this->insertalldata('tbl_contacts',$data);
                if($chk)
                {
                    echo "<script>
                    alert('Thanks for contact with us we will contact with you Soon')
                    window.location='./contactus';
                    </script>";
                }
            }

            // create a new add employees data 
            if(isset($_POST["addemp"]))
            {
                date_default_timezone_set("Asia/Calcutta");
                $name=$_POST["name"];
                $email=$_POST["email"];
                $pwd=base64_encode($_POST["password"]);
                $cpass=base64_encode($_POST["cpass"]);
                $mobile=$_POST["mobile"];
                $date_time=date("d/m/Y H:i:s a");
                $data=array("name"=>$name,"email"=>$email,"password"=>$pwd,"phone"=>$mobile);
                // manage pssword and confirmed password
                if($pwd==$cpass)
                {
                $chk=$this->insertalldata('tbl_addemployee',$data);
                if($chk)
                {
                    echo "<script>
                    alert('Your data successfuly created')
                    window.location='./online.addemployee';
                    </script>";
                }
            }
            else 
            {
                echo "<script>
                alert('Your Password and confirmed password does not matched try again')
                window.location='./addemployee';
                </script>"; 
            }
            }

            // create a logic of login as employee

            if(isset($_POST["login"]))
            {
                $email=$_POST["email"];
                $password=base64_encode($_POST["password"]);
                $chk=$this->employeelogin('tbl_addemployee',$email,$password);
                if($chk)
                {
                  echo "<script>
                  alert('You are Logged in as Employee Successfully')
                  window.location='./';
                  </script>";  
                }
                else 
                {

                    echo "<script>
                    alert('Your email and password are Incorrect try again')
                    window.location='./login-here';
                    </script>";  
                }
            }
           
            // display all employee logic 
            $shwdata=$this->selectalldata('tbl_addemployee');
            // coount all employees data logic 
            $countdata=$this->countalldata('tbl_addemployee','empid');

            // create an logic for add feedback
            if(isset($_POST["add_feedback"]))
            {

                date_default_timezone_set("Asia/Calcutta");
                $id=$_SESSION["employee_id"];
                $name=$_POST["name"];
                $email=$_POST["email"];
                $phone=$_POST["phone"];
                $star=$_POST["star"];
                $comment=$_POST["comment"];
                $date=date("d/m/Y H:i:s a");
                $data=array("employee_id"=>$id,"name"=>$name,"email"=>$email,"phone"=>$phone,"star"=>$star,"comment"=>$comment,"added_date_time"=>$date); 
                $chk=$this->insertalldata('tbl_feedback',$data);
                if($chk)
                {
                  echo "<script>
                  alert('Thanks for providing your valuable feedback with us')
                  window.location='./';
                  </script>";  
                }

            }
            // create a logic for total cont feedback as logged in user
            if(isset($_SESSION["emp_id"]))
            {
                $id=$_SESSION["emp_id"];
                $countfeedback=$this->countfeedback('tbl_feedback','feedback_id','emp_id',$id);

            }

            // create an logic to display all feedback provided by users
            if(isset($_SESSION["emp_id"]))
            {
                $id=$_SESSION["emp_id"];
                $feedbackdata=$this->selectalldata1('tbl_feedback','emp_id',$id);
          
            }
            if(isset($_GET["logout-here"]))
            {
                $lg=$this->logout();
                if($lg)
                {
                  echo "<script>
                  alert('You are Logout in as Employee Successfully')
                  window.location='./';
                  </script>";  
                }
            }

            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("content.php");
                    break;
                    case '/addemployee':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("addemployee.php");
                        break;

                        case '/login-here':
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("login.php");
                            break;
    
                        case '/manageemployee':
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("manageemployee.php");
                            break;

                            
                        case '/contactus':
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("contactus.php");
                            break;
                            
                            
                        case '/notifications':
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("notifications.php");
                            break;
        
                    default:
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("404.php");
                        break;
                    
            }
        }

    }
}
$obj=new Controller;
?>