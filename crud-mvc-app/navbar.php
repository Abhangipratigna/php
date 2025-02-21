<?php 
$mainurl="http://localhost/php-examples/crud-mvc-app/";
$baseurl="http://localhost/php-examples/crud-mvc-app/assets/";
?>


<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Employee managements systems pvt ltd(EMS)</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">EMS Pvt Ltd</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo $mainurl;?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $mainurl;?>aboutus">About us</a>
          </li>
          <?php
         if(!isset($_SESSION["emp_id"]))
         {
          ?>          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Add Employee
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo $mainurl;?>addemployee">Add Employee</a></li>
              <li><a class="dropdown-item" href="<?php echo $mainurl;?>manageemployee">Manage Employee</a></li>
             
            </ul>
          </li>
          <?php
         }
         else
         {

         ?>
<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome :<?php echo $_SESSION["name"];?>
            </a>
            <ul class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo $mainurl;?>manageemployee">Manage Profile</a></li>
              <li><a class="dropdown-item" href="<?php echo $mainurl;?>changepassword">Change password</a></li> 
              <li><a class="dropdown-item" href="<?php echo $mainurl;?>notifications">Notification <span class="badge badge-danger bg-danger text-white"><?php echo $countfeedback[0]["total"];?></span></a></li> 
              <li><a class="dropdown-item" href="<?php echo $mainurl;?>changepassword">Delete Account</a></li> 
              <li><a class="dropdown-item btn btn-sm btn-danger text-white bg-danger" href="<?php echo $mainurl;?>?logout-here">Logout!</a></li> 
            </ul>
          </li>

          <?php 
          }
        
        ?>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo $mainurl;?>contactus">Contact Us</a>
          </li>
          <li class="nav-item">
          <button type="button" class="btn btn-primary ms-5">
  Total Employees <span class="badge bg-danger"><?php echo $countdata[0]["total"];?></span>
</li>
</button>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>




