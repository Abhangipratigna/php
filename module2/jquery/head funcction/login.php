<?php 

if(isset($_GET["chk"]))
{
    $year=$_GET["year"];
    if($year%4==0)
    {
    echo "<h1 align='center'>The year is :Leap year</h1>";
    }
    else 
    {
        echo "<h1 align='center'>The year is :not a Leap year</h1>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Leap year</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .content 
        {
            width: 50%;
            height: auto;
            margin: auto;
            background-color: antiquewhite;
            padding: 25px;
        }
    </style>
</head>
<body>
<div class="content">
    <h1>Check leap Years</h1>
  <form method="get">
    Enter a Year : <input type="text" name="year" placeholder="Enter a Years *" required />
    <br><br>
    <input type="submit" name="chk" value="Check">
  </form>  
  
</div>
</body>
</html>