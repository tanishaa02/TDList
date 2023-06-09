<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname ="to do";
    $con = mysqli_connect($host,$username,$password,$dbname);
    if(!$con)
    {
        die("Error: " .mysqli_error($con));
    }
    else{
        echo "Successfully connected";
    }
    
    // echo "Successfully connected";


