<?php 
class Model 
{
    public $conn="";
    public function __construct()
    {
       
        try 
        {
          $this->conn=new mysqli("localhost","root","","crud-mvc-app");
          //echo "Connection successfully Created";
        }
        catch(Exception $e)
        {
          echo "Something went wrong while connection with database";
        }
    }
    // create a member function or insert all data
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
   
    public function employeelogin($table,$email,$password)
    {
      $select="select * from $table where email='$email' and password='$password'";
      $query=mysqli_query($this->conn,$select);
      $fetch=mysqli_fetch_array($query);
      $num_row=mysqli_num_rows($query);
      if($num_row==1)
      {
        $_SESSION["emp_id"]=$fetch["emp_id"];
        $_SESSION["name"]=$fetch["name"];
        $_SESSION["email"]=$fetch["email"];
        return true;
      }
      else 
      {
        return false;
      }
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
    //  echo $select="select count($column) as total from $table"; exit();
      $select="select count($column) as total from $table";
      $query=mysqli_query($this->conn,$select);
      while($fetch=mysqli_fetch_array($query))
      {
      $arr[]=$fetch;  
      }
      return $arr;
    }

    public function countfeedback($table,$column,$column1,$id)
    {
      $select="select count($column) as total from $table where $column1='$id'";
      $query=mysqli_query($this->conn,$select);
      while($fetch=mysqli_fetch_array($query))
      {
      $arr[]=$fetch;  
      }
      return $arr;
    }

    public function selectalldata1($table,$column,$id)
    {
      $select="select * from $table where $column='$id'";
      $query=mysqli_query($this->conn,$select);
      while($fetch=mysqli_fetch_array($query))
      {
      $arr[]=$fetch;  
      }
      return $arr;
    }

    public function logout()
    {
      unset($_SESSION["emp_id"]);
      unset($_SESSION["name"]);
      unset($_SESSION["email"]);
      session_destroy();
      return true;
    }
}

?>



