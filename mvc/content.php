<html>   
    
     <div class="container bg-white shadow w-50 p-5 mt-5">
    <h1> Add Task Here</h1>

    <hr class="w-25">
    <form method="post">
            <div class="form-group mt-2">
                <input type="text" name="new_task" placeholder="New Task *" required >
            </div>
            <div class="form-group mt-2">
                <input type="text" name="details" placeholder="Details *" required >
            </div>
            <div class="form-group mt-2">
                <input type="submit" name="create" value="create" >
            </div>
            <h1> Task List</h1>

            <?php 
foreach($shw as $row)
{
?>
<tr>
<td><?php echo $row["new_task"];?></td>
<td><?php echo $row["details"];?></td>
<td><a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a> | 
    <a href="" class="btn btn-sm btn-primary text-white"><span class="bi bi-pencil"></span></a>
</td>
<br>
</tr>

<?php 
}
?>
</form>
    </div>
</html>