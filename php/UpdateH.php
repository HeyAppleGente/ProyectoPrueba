<?php

include("Conexion.php");
$con=conectar();

$Id_Hist_Clinica=$_POST['Id_Hist_Clinica'];
$Estado=$_POST['Estado'];
$Esterilización=$_POST['Esterilización'];
$Esq_Vacunación=$_POST['Esq_Vacunación'];

$sql="UPDATE historia_clinica SET Estado='$Estado',Esterilización='$Esterilización',Esq_Vacunación='$Esq_Vacunación' WHERE Id_Hist_Clinica=$Id_Hist_Clinica";

$query=mysqli_query($con,$sql);
if($query){
    header("Location: HistoriaClinica.php");
}

?>