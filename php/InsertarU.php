<?php
include("Conexion.php");

$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Identificacion=$_POST['Identificacion'];
$Telefono=$_POST['Telefono'];
$Telefono_Movil=$_POST['Telefono_Movil'];
$Correo=$_POST['Correo'];
$Contraseña=$_POST['Contraseña'];
$Rol=$_POST['Rol'];

$sql="INSERT INTO clientes (Nombre,Apellidos,Identificacion,Telefono,Telefono_Movil,Correo,Contraseña,Rol) VALUES ('$Nombre','$Apellidos','$Identificacion','$Telefono','$Telefono_Movil','$Correo','$Contraseña','$Rol')";

$query=mysqli_query($con,$sql);

if($query){
    header("Location: ListaUsuarios.php");
}else{
    echo"Error";
}

?>


