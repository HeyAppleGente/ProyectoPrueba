<?php
include("Conexion.php");
$con=conectar();


$Nombre=$_POST['Nombre'];
$Genero=$_POST['Genero'];
$Id_Raza=$_POST['Id_Raza'];
$Edad=$_POST['Edad'];
$Tamaño=$_POST['Tamaño'];
$Descripcion=$_POST['Descripcion'];
$Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
//$Foto=addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
//$Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));


$sql="INSERT INTO Mascotas(Nombre,Genero,Id_Raza,Edad,Tamaño,Descripcion,Foto) VALUES ('$Nombre','$Genero','$Id_Raza','$Edad','$Tamaño','$Descripcion','$Foto')";

$query=mysqli_query($con,$sql);

if($query){
    header("Location: ListaMascotas.php");
}else{
    echo"Error";
}
/*include("Conexion.php");

$con=conectar();

$Id_Mascotas=$_POST['Id_Mascotas'];
$Nombre=$_POST['Nombre'];
$Genero=$_POST['Genero'];
$Id_Raza=$_POST['Id_Raza'];
$Edad=$_POST['Edad'];
$Tamaño=$_POST['Tamaño'];


$sql="INSERT INTO Mascotas (Id_Mascotas,Nombre,Genero,Id_Raza,Edad,Tamaño) VALUES ('$Id_Mascotas','$Nombre','$Genero','$Id_Raza','$Edad','$Tamaño')";

$query=mysqli_query($con,$sql);

if($query){
    header("Location: Mascotas.php");
}else{
    echo"Error";
}
*/
?>
