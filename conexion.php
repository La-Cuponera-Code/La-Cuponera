<?php

$mysqli = new mysqli("localhost", "root", "", "cuponera","3307");
 
    $host="localhost";
    $user="root";
    $pass="";
    $port = "3307"; // Especifica el puerto correcto aquí


    $bd="cuponera";

    $con=mysqli_connect($host,$user,$pass,$port);

    mysqli_select_db($con,$bd);

    return $con;

?>
 