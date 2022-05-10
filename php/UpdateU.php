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

$sql="UPDATE clientes SET  Nombre='$Nombre',Apellidos='$Apellidos',Identificacion='$Identificacion',Telefono='$Telefono',Telefono_Movil='$Telefono_Movil',Correo='$Correo',Contraseña='$Contraseña',Rol='$Rol'WHERE Identificacion='$Identificacion'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ListaUsuarios.php");
    }
?>