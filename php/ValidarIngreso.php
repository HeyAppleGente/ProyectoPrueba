<?php

include("Conexion.php");

session_start();


$Nombre=$_POST['Nombre'];
$Contraseña=$_POST['Contraseña'];
$Rol=$_POST['Rol'];



$sql=("SELECT * FROM clientes WHERE Nombre='$Nombre' and Contraseña ='$Contraseña'and Rol='$Rol'");
$resultado=$con->query($sql);


$row = $resultado->fetch_assoc();


if($row['Nombre'] == $Nombre && $row['Contraseña'] == $Contraseña){

    if($rol=='Usuario'){
        header("location: formulario.html");
    }else{
        header("location: VistaAdmin.html");
    }
    
}else{
    header("location: ../paginas/inicioSesion.html");
}




/*$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: VistaAdmin.html");
}else{
    echo"Error";
}*/

?>