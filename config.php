<?php
    $server="localhost:3307";
    $username="root";
    $password="";
    $db="tour_and_travel";

    $conn=mysqli_connect($server,$username,$password,$db);

    if($conn){
        // Successful connection of database
    }
    else{
        // Database not connected
        die("connection to this database failed due to" .mysqli_connect_error());
    }
?>