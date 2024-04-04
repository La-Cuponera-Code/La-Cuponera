<?php

$mysqli = new mysqli("localhost", "root", "", "cuponera");
 
    $host="localhost";
    $user="root";
    $pass="";

    $bd="cuponera";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;

?>