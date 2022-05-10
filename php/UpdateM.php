<?php


include("Conexion.php");
$con=conectar();

$Id_Mascotas=$_POST['Id_Mascotas'];
$Nombre=$_POST['Nombre'];
$Genero=$_POST['Genero'];
$Id_Raza=$_POST['Id_Raza'];
$Edad=$_POST['Edad'];  
$Tamaño=$_POST['Tamaño'];
$Descripcion=$_POST['Descripcion'];
$Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));




$sql="UPDATE Mascotas SET  Id_Mascotas=$Id_Mascotas , Nombre='$Nombre',Genero='$Genero',Id_Raza='$Id_Raza',Edad='$Edad',Tamaño='$Tamaño',Descripcion='$Descripcion', Foto='$Foto' WHERE Id_Mascotas='$Id_Mascotas'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Mascotas.php");
    }

?>
