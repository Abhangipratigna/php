<div class="container-fluid content  p-5 mt-0 bg-white">
<div class="row">
<div class="col-md-3 p-0 ms-5 shadow mt-5">
<h5 class="ms-5">Manage All Feedback Data</h5>
<center>
<img src="https://images.prismic.io/smarttask/20803c6a-2881-4e2c-a4ea-2a915bb723a1_change+management.gif?auto=compress,format"  class="ms-5 w-75"/>
<br/><br/>
<button type="button" class="btn btn-primary">
Total Feedback provided <span class="badge bg-danger"><?php echo $countfeedback[0]["total"];?></span>
</button>
</center>
</div>
<div class="col-md-7 p-0 ms-5 shadow mt-5">
<table class="table table-responsive">
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Star</th>
<th>Comment</th>
<th>Date</th>
<th>Action</th>
</tr>   
<!-- display all data -->
 
<?php 
foreach($feedbackdata as $row)
{
?>

<tr>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["email"];?></td>
<td><?php echo $row["phone"];?></td>
<td><?php echo $row["star"];?></td>
<td><?php echo $row["comment"];?></td>
<td><?php echo $row["added_date_time"];?></td>
<td><div class="" style="min-width:100px"><a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a> | <a href="" class="btn btn-sm btn-primary text-white"><span class="bi bi-pencil"></span></a></div></td>
</tr>

<?php 
}
?>

</table>
</div>
</div>
</div>