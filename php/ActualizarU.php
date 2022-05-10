<?php 
include("Conexion.php");
$con=conectar();

$Id=$_GET['Identificacion'];



$sql="SELECT * FROM clientes WHERE Identificacion='$Id'";
$query=mysqli_query($con,$sql);
 
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/VistaAdmin.css" />
        <title>Actualizar</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="UpdateU.php" method="POST">
                    
                                <input type="hidden" name="Identificacion" value="<?php echo $row['Identificacion']  ?>">     
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']?>">
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']?>">
                                <input type="text" class="form-control mb-3" name="Telefono_Movil" placeholder="Tele_Movil" value="<?php echo $row['Telefono_Movil']?>">
                                <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo" value="<?php echo $row['Correo']?>">
                                <input type="text" class="form-control mb-3" name="Contraseña" placeholder="Contraseña" value="<?php echo $row['Contraseña']?>">
                                <input type="text" class="form-control mb-3" name="Rol" placeholder="Rol" value="<?php echo $row['Rol']?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Enviar">
                    </form>
                    
                </div>
    </body>
</html>