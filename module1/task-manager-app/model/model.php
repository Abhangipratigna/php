<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
        // databse connection
        try 
        {
        $this->conn=new mysqli("localhost","root","","module1");
        // echo "connection successfully";
        }
        catch(Exception)
        {
            die(mysqli_error($this->conn));
        }
    }
}

?>
