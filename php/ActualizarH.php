<?php 
include("Conexion.php");
$con=conectar();

$Id_Hist_Clinica =$_GET['Id_Hist_Clinica'];



$sql="SELECT * FROM historia_clinica WHERE Id_Hist_Clinica='$Id_Hist_Clinica'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="UpdateH.php" method="POST">
                    
                                <input type="hidden" name="Id_Hist_Clinica" value="<?php echo $row['Id_Hist_Clinica']  ?>">     
                                <input type="text" class="form-control mb-3" name="Estado" placeholder="Estado" value="<?php echo $row['Estado']?>">
                                <input type="text" class="form-control mb-3" name="Esterilización" placeholder="Esterilización" value="<?php echo $row['Esterilización']?>">
                                <input type="text" class="form-control mb-3" name="Esq_Vacunación" placeholder="Esq_Vacunación" value="<?php echo $row['Esq_Vacunación']?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Enviar">
                    </form>
                    
                </div>
    </body>
</html>