<div class="container w-50 mx-auto mt-5 p-5">
    <h1 class="">create account</h1>
    
    <form method="post">

        <div class="form-group mt-2">
            <input type="text" placeholder="email" name="email" class="form-control"/>
       </div>
    
       
       <div class="form-group mt-2">
            <input type="password" placeholder="password" name="password" class="form-control"/>
       </div>

       <div class="form-group mt-2">
    <textarea  placeholder="Address" name="address"  class="form-control"></textarea>
     </div>


    <div class="form-group mt-2">
    <input type="submit" name="reg" value="Create Account"  class="btn btn-lg btn-warning text-dark" />
   </div>


<div class="form-group mt-2">
    <b>Already hav an account ? <a href="<?php echo $mainurl;?>login">Logoin here</a>
</div>
</form>
</div>



