

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 p-5 shadow bg-white">
            <h2>Add Fruits </h2>
            <hr>
            <ul class="sidebar-link">
                <li><a href="<?php echo $mainurl;?>customers">Add Fruit stock</a></li>
                <li><a href="<?php echo $mainurl;?>viewfruits">View Fruit stock</a></li>
                <li><a href="<?php echo $mainurl;?>updatefruits">Update fruit stock</a></li>
            </ul>
        </div>
        
        <div class="col-md-7 ms-5 p-5 shadow bg-white">
            <h2>Add Fruits Form (Manager Module)</h2>
            <hr/>
            <form>
            <div class="form-group mt-2">
                <input type="text" name="fruitname" placeholder="Fruit Name *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="number" name="qty" placeholder="Fruit qty *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="text" name="price" placeholder="Fruit Price *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="submit" name="addfruit" value="Add Fruit" class="btn btn-dark btn-lg text-white">
            </div>

            </form>
        </div>
    </div>
</div>
