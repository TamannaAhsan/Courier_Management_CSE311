<?php

    $dbcon = mysqli_connect('localhost', 'root', '');
    $db_select= mysqli_select_db($dbcon, 'courier-management');


    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>