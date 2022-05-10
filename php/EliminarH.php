<?php

include("conexion.php");
$con=conectar();

$Id_Hist_Clinica=$_GET['Id_Hist_Clinica'];

$sql="DELETE  FROM historia_clinica  WHERE Id_Hist_Clinica=$Id_Hist_Clinica";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: HistoriaClinica.php");
    }
?>