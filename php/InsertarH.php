<?php
include("Conexion.php");

$con=conectar();

$Id_Hist_Clinica=$_POST['Id_Hist_Clinica'];
$Estado=$_POST['Estado'];
$Esterilización=$_POST['Esterilización'];
$Esq_Vacunación=$_POST['Esq_Vacunación'];



$sql="INSERT INTO historia_clinica (Estado,Esterilización,Esq_Vacunación) VALUES ('$Estado','$Esterilización','$Esq_Vacunación')";

$query=mysqli_query($con,$sql);

if($query){
    header("Location: HistoriaClinica.php");
}else{
    echo"Error";
}

?>
