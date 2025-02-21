<?php  
if(!isset($_SESSION["uid"]))
{
?>

<div class="container w-50 mx-auto mt-5 p-5">
    <h1 class="">Add new Task Here</h1>
    <hr />
    <button type="button"  onclick="login()" class="btn btn-dark text-white">Create Task Here</button>

</div>
<?php 
}
else 
{
?>

<div class="container w-50 mx-auto mt-5 p-5">
<h1 class="">Add new Task Here</h1>
<hr />
<form method="post">
<div class="form-group mt-2">
    <input type="text" placeholder="New Task" name="new-task" class="form-control" />
</div>

<div class="form-group mt-2">
    <textarea  placeholder="New Task details" name="new-task-detail"  class="form-control"></textarea>
</div>


<div class="form-group mt-2">
    <input type="submit" name="add-task" value="Create"  class="btn btn-lg btn-warning text-dark" />
</div>
</form>

<!-- display code  -->
<?php 
foreach($shw as $row)
{
?>
<table class="table tale-responsive mt-5 w-100 p-2">
<tr>
    <td><?php echo $row["taskid"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["details"];?></td>
    <td class="float-end"><a href="" class="btn btn-sm btn-danger text-white">Delete</a> | <a href="" class="btn btn-sm btn-primary text-white">Edit</a></td>
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
    alert('Want to add Task please Login First ?')
    window.location='./create-account';
}    
</script>