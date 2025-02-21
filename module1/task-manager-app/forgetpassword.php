<?php 
$mainurl="http://localhost/php-examples/module1/task-manager-app/";
$baseurl="http://localhost/php-examples/module1/task-manager-app/assets";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Task manager app</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
<script src='main.js'></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<div class="w-50 mx-auto mt-5 bg-white">
<div class="bg-danger p-4 text-white mx-auto">
<h1 class="ms-4">Task <br> <span class="fs-5">Managements</span></h1>
<p class="ms-4">Every value you create for the client is priceless: whether it's the ability for them to oversee the project as external users or collaborate on vital documentation.  <a href="<?php echo $mainurl;?>"><button type="button" class="btn btn-md btn-outline-warning mt-2 text-white">Go To Home <span class="bi bi-house"></span>>></button></a></p>
</div>    
<p class="text-center">

<div class="row">
<div class="col-md-5 p-4">
<img src="https://img.freepik.com/free-vector/login-concept-illustration_114360-739.jpg" class="img-fluid" />    
</div>
<div class="col-md-7 p-4">
<!-- login form -->
<form method="post">
<div class="form-group mt-2 p-2">

<input type="text" name="email" placeholder="Enter your email *" required class="form-control"/>
</div>

<div class="form-group mt-2 p-2">
<input type="submit" name="signin" value="Submit"  class="btn btn-md btn-primary text-white fs-4 mt-3"/>

</div>

</div>
</div> 
</form>
</p>

</div>    
</div>    

</body>
</html>