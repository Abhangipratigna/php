<?php
$mainurl="http://localhost/php-examples/task-manager/";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script> -->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container w-75 mx-auto">
          <a class="navbar-brand" href="#">Task Manager</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo $mainurl;?>">Home</a>
              </li>
             
              <?php 
               if(!isset($_SESSION["id"]))
               { 
              ?>
              <li class="nav-item ms-5">
                <a class="nav-link btn btn-sm btn-warning" href="<?php echo $mainurl;?>create-account">CreateAccount</a>
              </li>

              <?php 
            }
            else 
            {
              ?>
              
              <li class="nav-item ms-2">
                <a class="nav-link text-white" href="<?php echo $mainurl;?>">Welcome To:<?php echo $_SESSION["email"];?></a>
              </li>

              <li class="nav-item ms-5">
                <a class="nav-link btn btn-sm btn-warning" href="<?php echo $mainurl;?>">Tasks</a>
              </li>

              <li class="nav-item ms-2">
                <a class="nav-link btn btn-sm btn-warning" href="<?php echo $mainurl;?>">Manage Tasks</a>
              </li>

              <li class="nav-item ms-2">
                <a class="nav-link btn btn-sm btn-danger text-white" href="<?php echo $mainurl;?>?logout-here">Logout ?</a>
              </li>

             <?php 
            }
            ?>
            
          </div>
        </div>
      </nav>
</body>
</html>