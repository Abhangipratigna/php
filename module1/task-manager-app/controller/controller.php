<?php 
require_once("model/model.php");
class controller extends model 
{
   public function __construct()
   {
    parent:: __construct();
    // load view 
    if(isset($_SERVER["PATH_INFO"]))
    {
        switch($_SERVER["PATH_INFO"])
        {
            case '/':
                require_once("index.php");
                require_once("header.php");
                require_once("content.php");
                break;
                case '/login':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("login.php");
                    break;    
                    case '/register':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("register.php");
                        break;
                        case '/forgetpassword':
                            require_once("index.php");
                            require_once("header.php");
                            require_once("forgetpassword.php");
                            break;
                            case '/dashboard':
                                require_once("index.php");
                                require_once("header.php");
                                require_once("navbar.php");
                                require_once("dashboard.php");
                                require_once("footer.php");
                                require_once("addtask.php");
                                
                                break;

            default:
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                break;
        }
    }
   }

}

$obj=new controller;



?>