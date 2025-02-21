<?php
$mainurl="http://localhost/php-examples/current-mvc-app/admin/";
$baseurl="http://localhost/php-examples/current-mvc-app/admin/assets/";

if(isset($_SERVER["admin_id"]))
{
    echo "<script>
    window.location='./';
    </script>";
}

?>


