<?php

include("conexion.php");
$con=conectar();

$Id=$_GET['Identificacion'];

$sql="DELETE  FROM clientes  WHERE Identificacion='$Id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ListaUsuarios.php");
    }
?>