<?php
$mainurl="http://localhost/php-examples/crud/";
$baseurl="http://localhost/php-examples/crud/assets";

?>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Fruit managements systems pvt ltd(FMS)</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
<!-- <link rel='stylesheet' type='text/css'  href='<?php echo $baseurl;?>css/style.css'> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<div class="container mt-5">
        
            <h2>display items
                <a href="<?php echo $mainurl;?>add_items">
                    <button type="button" name="add_items" class="btn btn-dark ms-5">Add New Item</button>
                </a>
</h2>
            <hr/>
            <table class="table table-responsive">
                <tr>
                <th>name</th>
                <th>Email</th>
                <th>phone</th>
                <th>pin</th>
                <th>Age</th>
                <th>Address</th>
                <th>Action</th>

                </tr> 
                <?php 
foreach($shw_data as $row)
{
?>
<tr>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["Email"];?></td>
<td><?php echo $row["phone"];?></td>
<td><?php echo $row["pin"];?></td>
<td><?php echo $row["Age"];?></td>
<td><?php echo $row["Address"];?></td>

<td><a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a> | 
    <a href="" class="btn btn-sm btn-primary text-white"><span class="bi bi-pencil"></span></a>
</td>
</tr>

<?php 
}
?>
                </table>

    </div>
</body>
</html>