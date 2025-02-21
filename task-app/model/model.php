<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
     try 
     {
    //    $this->conn=new mysqli("localhost","root","","task-app");
    $this->conn=new mysqli("sql111.byethost11.com","b11_38263899","t123456","b11_38263899_taskapp");
     }
     catch(Exception $e)
     {
        die(mysqli_error($this->conn));
     }
    }

    // insert data create a member functions 
    public function insertalldata($table,$data)
    {
        $key=array_keys($data);
        $key1=implode(",",$key);
        
        $values=array_values($data);
        $values1=implode("','",$values);

        $insert="insert into $table($key1) values('$values1')";
        $query=mysqli_query($this->conn,$insert);
        return $query;

    }

    // create a function for show data
    public function shwdata($table,$uid)
    {
        $select="select * from $table where uid='$uid'";
        $query=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($query))
        {
            $arr[]=$fetch;
        }
        return $arr;

    }

    // create a member function for login data
    public function login($table,$email,$password)

    {
        $select="select * from $table where email='$email' and password='$password'";
        $query=mysqli_query($this->conn,$select);
        $num_rows=mysqli_num_rows($query);
        $fetch=mysqli_fetch_array($query);
        if($num_rows==1)
        {
            $_SESSION["uid"]=$fetch["uid"];
            $_SESSION["email"]=$fetch["email"];
           return true;
        }
        else 
        {
            return false;
        }
    }
    // create a for logout 
    public function logout()
    {
        unset($_SESSION["uid"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
}
?>