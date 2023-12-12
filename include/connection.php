<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "cafe";

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
    {
        die("Failed to Connect");
    }