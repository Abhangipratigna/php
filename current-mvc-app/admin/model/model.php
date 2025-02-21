<?php 
class model 
{
    public $conn="";
    public function __construct()
    {
        // databse connection
        try 
        {
        $this->conn=new mysqli("localhost","root","","crud-mvc-app");
           // echo "connection successfully";
        }
        catch(Exception)
        {
            die(mysqli_error($this->conn));
        }
    }
    public function insertalldata($table,$data)
    {
      //convert $data to arrayto string
      $column=array_keys($data);
      $column1=implode(',',$column);
      $value=array_values($data);
      $value1=implode("','",$value);
      $insert="insert into $table ($column1) values('$value1')";
      $query=mysqli_query($this->conn,$insert);
      return $query;
    }

public function selectalldata($table)
    {
      $select="select * from $table";
      $query=mysqli_query($this->conn,$select);
      while($fetch=mysqli_fetch_array($query))
      {
      $arr[]=$fetch;  
      }
      return $arr;
    }

    
    public function countalldata($table,$column)
    {
      $select="select count($column) as total from $table";
      $query=mysqli_query($this->conn,$select);
      while($fetch=mysqli_fetch_array($query))
      {
      $arr[]=$fetch;  
      }
      return $arr;
    }

    public function adminlogin($table,$email,$password)
    {
      $select="select * from $table where email='$email' password='$password'";
      $query=mysqli_query($this->conn,$select);
      $fetch=mysqli_fetch_array($query);
      $num_row=mysqli_num_row($query);
      if($num_row==1)
      {
        $_SESSION["admin_id"]=$fetch["admin_id"];
        $_SESSION["email"]=$fetch["email"];
        return true;
      }
      else
      {
        return false;
      }
    }
       public function logout()
       {
         unset($_SESSION["admin_id"]);
         unset($_SESSION["eamil"]);
         session_destroy();
         return true;
       }
  }

?>
