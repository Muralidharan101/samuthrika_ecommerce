<?php
    $server   = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'samuthrika';

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn)
    {
        die("Database connection failed: " .mysqli_connect_error());
    }

    if(function_exists('date_default_timezone_set'))
    {
        date_default_timezone_set("Asia/Kolkata");
    }

    $date     = date('Y-m-d');
    $dateTime = date('Y-m-d H:i:s');

    $path = '/samuthrika_ecommerce_new/';
?>