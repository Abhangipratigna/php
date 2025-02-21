

<?php 
require_once("header.php");
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 p-5 shadow bg-white">
            <h2>E-Note book</h2>
            <hr>
            <ul class="sidebar-link">
                <li><a href="generatenote.php"> generate Note</a></li>
                <li><a href="viewnote.php">View Note</a></li>
                <li><a href="exit.php">exit</a></li>
            </ul>
        </div>
        
        <div class="col-md-7 ms-5 p-5 shadow bg-white">
            <h2>Welcome to python E-Note</h2>
            <hr/>
            <form>

            <div class="form-group mt-2">
                <input type="number" name="choicenumber" placeholder="choicenumber*" required class="form-control">
            </div>

            <div class="form-group mt-2">
                <input type="text" name="generatorname" placeholder="generator Name *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="text" name="title" placeholder="title *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="text" name="content" placeholder="content *" required class="form-control">
            </div>

            
            <div class="form-group mt-2">
                <input type="submit" name="addE-Note" value="Add E-Note" class="btn btn-dark btn-lg text-white">
            </div>

            </form>
        </div>
    </div>
</div>
