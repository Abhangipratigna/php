
<?php 
class Model 
{
    public $conn="";
    public function __construct()
    {
      session_start();
        try 
        {
          $this->conn=new mysqli("localhost","root","","task-manager");
          // echo "Connection successfully Created";
        }
        catch(Exception $e)
        {
          die(mysqli_error($this->conn));
        }
    }

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

    public function shawdata($table,$uid)
    {
        $select="select * from $table where id='$id'";
        $query=mysqli_query($this->conn,$select);
        while($fetch=mysqli_fetch_array($query))
        {   
            $arr[]=$fetch;
        }
        return $arr;

    }

    public function login($table,$email,$password)
    {
      $select="select * from $table where  email='$email' and password='$password'";
      $query=mysqli_query($this->conn,$select);
      $num_rows=mysqli_num_rows($query);
      $fetch=mysqli_fetch_array($query);
      if($num_rows==1)
      {
        $_SESSION["id"]=$fetch["id"];
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
      unset($_SESSION["id"]);
      unset($_SESSION["email"]);
      session_destroy();
      return true;
    }
}
?>
