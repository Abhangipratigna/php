<?php 

require_once("header.php");

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 p-5 shadow bg-white">
            <h2>E-Note book </h2>
            <hr>
            <ul class="sidebar-link">
                <li><a href="generatenote.php">generate Note</a></li>
                <li><a href="viewnote.php">view Note</a></li>
                <li><a href="exit.php">exit</a></li>
            </ul>
        </div>
        
        <div class="col-md-7 ms-5 p-5 shadow bg-white">
            <h2>View Note</h2>
            <hr/>
          
            <table class="table table-responsive">
                <tr>
                    <th>#</th>
                    <th>generatorname</th>
                    <th>title</th>
                    <th>content</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Anjali Patel</td>
                    <td>Python Introduction</td>
                    <td>Python higher level programing language</td>
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