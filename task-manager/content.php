<?php
if(!isset($_SESSION["id"]))
{ 
?>


<div class="container bg-white shadow w-50 p-5 mt-5">
        <h1 class="">Add new tasks here</h1>
        <button type="button" onclick="login()" class="btn btn-dark text-white">create task here</button>
</div>
<?php
}
else
{
?>


<div class="container bg-white shadow w-50 p-5 mt-5">
        <h1 class="">Add new tasks here</h1>
        
        <hr class="w-25">
        <form method="post">
        <div class="form-group mt-2">
        <input type="text" name="new_task" placeholder="new_task *" required class="form-control" />    
     </div>

    
      <div class="form-group mt-2">
      <input type="text" name="details" placeholder="details *" required class="form-control" />    
     </div>    
    
    
    <div class="form-group mt-2">
        <input type="submit" name="create" value="create"> 
    </div>  
</form>
    <h1>task list</h1>

    <?php
foreach($shw as $row)
{

?>
<table class="table tale-responsive mt-5 w-100 p-2">
<tr>
    <td><?php echo $row["id"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["details"];?></td>
    <td class="float-end"><a href="<?php $maniurl;?>deleteid=<?php echo $_SESSION["id"];?>" class="btn btn-sm btn-danger text-white">Delete</a>
     | <a href="" class="btn btn-sm btn-primary text-white">Edit</a></td>
</tr>
</table>
<?php
}
?>

</div>


<?php
}
?>
<script>
    function login()
    {
        alert('want to add task please login first ?')
        window.location='./create-account';
    }
    </script>








    
    
