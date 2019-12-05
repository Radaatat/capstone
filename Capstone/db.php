<?php
    $host = "capstonedb.crm8je0ps7pg.us-east-1.rds.amazonaws.com";
    $user = "admin";
    $password = "Digitno#2";
    $database = "capstonedb";

    $link = mysqli_connect($host,$user,$password,$database);

    if (!$link) {
        die("Connection failed: ".mysqli_connect_error());
    }