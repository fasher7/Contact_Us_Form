<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "contact_form";
    $con = mysqli_connect($server, $username, $password, $db);
    
    if(!$con)
    {
        die("Connection to database has failed, due to: ".mysqli_connect_error());
    }
?>