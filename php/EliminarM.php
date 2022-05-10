<?php

include("conexion.php");
$con=conectar();

$Id_Mascotas=$_GET['Id_Mascotas'];

$sql="DELETE  FROM Mascotas  WHERE Id_Mascotas='$Id_Mascotas'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ListaMascotas.php");
    }
?>