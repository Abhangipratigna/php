
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
            <h2>View Fruits Data(Manager Module)</h2>
            <hr/>
          
            <table class="table table-responsive">
                <tr>
                    <th>#</th>
                    <th>FruitName</th>
                    <th>FruitPrice</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Guvava</td>
                    <td>Rs.60</td>
                    <td><input type="number" min="1" max="10" value="1" class="form-control" /></td>
                    <td><a href="" class="btn btn-sm btn-danger text-white"><span class="bi bi-trash"></span></a>
                    |
                    <a href="" class="btn btn-sm btn-primary text-white"><span class="bi bi-pencil"></span></a>
                    
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>