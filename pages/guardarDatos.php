<?php

include 'conexion.php';
extract($_POST);

$nik = mysqli_real_escape_string($con,(strip_tags( $_POST['correo'],ENT_QUOTES)));

$cek = "SELECT correo FROM datos WHERE correo='$nik'";

$result = $mysqli->query($cek);

if ($result->num_rows > 0) {

    echo 'Debes ingresar otro correo, este ya existe!';
}else{

   

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['clave'])  && isset($_POST['rol'])){

    $sql="insert into `datos` (nombre,apellido,correo,clave,rol) values ('$nombre','$apellido','$correo','$clave', '$rol')";

    $result=mysqli_query($con,$sql);
    echo 'Datos guardados!';

 
    }

    }



?>
