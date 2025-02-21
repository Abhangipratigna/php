<?php 
require_once("controller/controller.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      
</head>

<body>
  <div class="container p-5 w-50 mx-auto mt-5 bg-light shadow">
    <h2>Swap numbers</h2>
    <hr>
    <form method="post">
        <div class="form-group mt-2">
        Enter a values :<input type="text" name="a" placeholder="Number N1 *" class="form-control" required>
        </div>
        <div class="form-group mt-2">
        Enter b values :<input type="text" name="b" placeholder="Number N2 *" class="form-control" required>
        </div>

        <div class="form-group mt-2">
        <input type="submit" name="chk" class="btn btn-md w-100 btn-dark text-white" value="Check" class="form-control">
        </div>
    </form>

  </div>    
</body>
</html> 