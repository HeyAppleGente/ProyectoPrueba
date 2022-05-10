<?php 
include("Conexion.php");
$con=conectar();

$Id=$_GET['Id_Mascotas'];



$sql="SELECT * FROM Mascotas WHERE Id_Mascotas='$Id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/Actualizar.css" />
        <title>Actualizar</title>
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="UpdateM.php" method="POST" enctype="multipart/form-data">
                    
                                <input type="hidden" name="Id_Mascotas" value="<?php echo $row['Id_Mascotas']  ?>">     
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']?>"><br>
                                <input type="text" class="form-control mb-3" name="Genero" placeholder="Genero" value="<?php echo $row['Genero']?>"><br>
                                <input type="text" class="form-control mb-3" name="Id_Raza" placeholder="Id_Raza" value="<?php echo $row['Id_Raza']?>"><br>
                                <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad" value="<?php echo $row['Edad']?>"><br>
                                <input type="text" class="form-control mb-3" name="Tamaño" placeholder="Tamaño" value="<?php echo $row['Tamaño']?>"><br>
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion" value="<?php echo $row['Descripcion']?>"><br>
                                <img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['Foto']); ?>">
                                <input type="File" class="form-control mb-3" name="Foto" placeholder="Foto">
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Enviar">
                    </form>
                    
                </div>
    </body>
</html>