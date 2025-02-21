<?php 
class Model 
{
    public $conn="";
    public function __construct()
    {
       
        try 
        {
          $this->conn=new mysqli("localhost","root","","crud");
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
    // create a member function for display all data
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
}

?>