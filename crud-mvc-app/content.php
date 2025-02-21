
<div class="container-fluid content p-5 mt-0 bg-white">
    <div class="row">

        <div class="col-md-3 p-4 ms-5 shadow mt-5">
            <button type="button" class="btn btn-primary">
                Total Employee <span class="badge bg-danger">4</span>
              </button>
        </div>

        <div class="col-md-3 p-4 ms-5 shadow mt-5">
            <a href="<?php echo $mainurl;?>addemployee"><button type="button" class="btn btn-primary">
                Add Employee <span class="bi bi-person"></span>
              </button></a>
        </div>

        <div class="col-md-3 ms-5 p-4 shadow mt-5">
            <a href="<?php echo $mainurl;?>manageemployee"><button type="button" class="btn btn-primary">
                Manage Employee <span class="bi bi-person"></span>
              </button></a>
        </div>
        <div class="col-md-6 p-4 ms-0 shadow mt-5">
        <h4 class="ms-5">Employee managements systems</h4>
        <img src="https://images.prismic.io/smarttask/20803c6a-2881-4e2c-a4ea-2a915bb723a1_change+management.gif?auto=compress,format"  class="ms-5 w-50"/>
        </div>
        
        <?php
        if(!isset($_SESSION["employee_id"]))
        {
            ?>
        <div class="col-md-5 p-4 ms-0 shadow mt-5">
            <h4 class="ms-5">Provides Feedback</h4>
            <button type="button" class="ms-5 btn btn-sm btn-dark text-white" onclick="login()">Click to feedback</button>
        </div>
        <?php 
    }
    else 
    {
        ?>
        <div class="col-md-5 p-4 ms-0 shadow mt-5">
            <h4 class="ms-5">Provides Feedback</h4>
            
<form method="post">
    <div class="form-group mt-2">
    <input type="text" name="name" placeholder="Name *" required class="form-control" />    
    </div>    
    
    <div class="form-group mt-2">
    <input type="text" name="email" placeholder="Email *" required class="form-control" />    
    </div>    
    
    <div class="form-group mt-2">
    <input type="text" name="phone" placeholder="Phone *" required class="form-control" />    
    </div>    
    
    
    <div class="form-group mt-2">
    <label>Provides star</label>    
    1Star :<input type="radio" name="star" value="1star" placeholder=" *" />
    2Star :<input type="radio" name="star" value="2star" placeholder=" *" />
    3Star :<input type="radio" name="star" value="3star" placeholder=" *" />
    4Star :<input type="radio" name="star" value="4star" placeholder=" *" />
    5Star :<input type="radio" name="star" value="5star" placeholder=" *" />    
    </div>    
    
    <div class="form-group mt-2">
    <input type="text" name="comment" placeholder="comment *" required class="form-control" />    
    </div>    
    
    <div class="form-group mt-2">
    <input type="submit" name="add_feedback" value="Send" placeholder="Name *" required class="btn btn-md btn-dark text-white" />    
    </div>    
    </form>
        </div>
     <?php 
    }
    ?>   
    </div>
</div>

<script>
function login()
{
  alert('Please Login first for provides feedback')
  window.location='./login-here';  
}    
</script>