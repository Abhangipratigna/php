<div class="container-fluid content p-5 mt-0 bg-white">
<div class="row">
<div class="col-md-4 p-4 ms-5 shadow mt-5">
<h5 class="ms-5">Manage employee Here</h5>
<center>
<img src="https://images.prismic.io/smarttask/20803c6a-2881-4e2c-a4ea-2a915bb723a1_change+management.gif?auto=compress,format"  class="ms-5 w-75"/>
<br/><br/>
<button type="button" class="btn btn-primary">
Total Employee <span class="badge bg-danger"><?php echo $countdata[0]["total"];?></span>
</button>
</center>
</div>

<div class="col-md-6 p-4 ms-5 shadow mt-5">
<table class="table table-responsive">
<tr>
<th>name</th>
<th>email</th>
<th>Phone</th>
<th>action</th>
</tr>   
<!-- display all data -->
<?php 
foreach($shwdata as $row)
{
?>
<tr>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["phone"];?></td>

<td><a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a> | 
<a href="" class="btn btn-sm btn-primary text-white"><span class="bi bi-pencil"></span></a></td>
</tr>

<?php 
}
?>

</table>

</div>

</div>

</div>