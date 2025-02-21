<div class="container-fluid content p-5 mt-0 bg-white">
<div class="row">
<div class="col-md-4 p-4 ms-5 shadow mt-5">
<h4 class="ms-5">Add employee Here</h4>
<center>
<img src="https://images.prismic.io/smarttask/20803c6a-2881-4e2c-a4ea-2a915bb723a1_change+management.gif?auto=compress,format"  class="ms-5 w-75"/>
<br/><br/>
<button type="button" class="btn btn-primary">
Total Employee <span class="badge bg-danger"><?php echo $countdata[0]["total"];?></span>
</button>
</center>
</div>

<div class="col-md-6 p-4 ms-5 shadow mt-5">
<form method="post">
<div class="form-group mt-2">
<input type="text" name="name" placeholder="Name *" required class="form-control" />    
</div>    

<div class="form-group mt-2">
<input type="text" name="email" placeholder="Email *" required class="form-control" />    
</div>    


<div class="form-group mt-2">
<input type="password" name="password" placeholder="Password *" required class="form-control" />    
</div>    

<div class="form-group mt-2">
<input type="password" name="cpass" placeholder="Confirmed Password *" required class="form-control" />    
</div>    
<div class="form-group mt-2">
<input type="text" name="mobile" placeholder="Phone *" required class="form-control" />    
</div>    


<div class="form-group mt-2">
<input type="submit" name="addemp" value="Add Employee" placeholder="Name *" required class="btn btn-md btn-dark text-white" />    
</div>    
</form>
</div>

</div>

</div>