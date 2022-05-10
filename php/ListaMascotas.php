<?php
include("Conexion.php");
$con=conectar();

    $sql="SELECT *  FROM Mascotas";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);

   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/VistaAdmin.css" />
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    
    <div class="sidebar">
      <h2>Adogt-Aqui</h2>
      <ul class="nav">
        <li>
          <a href="Usuario.php">
            <i class="fas fa-server"></i>
            <span>Registrar Usuario</span>
          </a>
        </li>
        <li>
          <a href="ListaUsuarios.php">
            <i class="fas fa-concierge-bell"></i>
            <span>Lista de Usuarios</span>
          </a>
        </li>
        <li>
          <a href="Mascotas.php">
            <i class="fas fa-calendar-alt"></i>
            <span>Registrar Mascotas</span>
          </a>
        </li>
        <li>
          <a href="ListaMascotas.php">
            <i class="fas fa-cog"></i>
            <span>Lista de Mascotas</span>
          </a>
        </li>
        <li>
          <a href="HistoriaClinica.php">
            <i class="fas fa-question-circle"></i>
            <span>Historia Clinica</span>
          </a>
        </li>
        <li>
          <a href="../inicio.html">
            <i class="fas fa-address-card"></i>
            <span>Salir</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="main">
    


<h1>lista de Mascotas</h1>
    
    <table class="cinereousTable">
        <tr>
            <th>Id_Mascotas</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Id_Raza</th>
            <th>Edad</th>
            <th>Tamaño</th>
            <th>Descripcion</th>
            <th>Historia Clinica</th>
            <th>Foto</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $row["Id_Mascotas"]?></td>
            <td><?php echo $row["Nombre"]?></td>
            <td><?php echo $row["Genero"]?></td>
            <td><?php echo $row["Id_Raza"]?></td>
            <td><?php echo $row["Edad"]?></td>
            <td><?php echo $row["Tamaño"]?></td>
            <td><?php echo $row["Descripcion"]?></td>
            <td><?php echo $row["Id_Historia_Clinica"]?></td>
            <td><img height="80px" src="data:image/jpg;base64,<?php echo base64_encode($row['Foto']); ?>"></td>
            <td><a href="ActualizarM.php?Id_Mascotas=<?php echo $row['Id_Mascotas']?>">Editar</a></td>
            <td><a href="EliminarM.php?Id_Mascotas=<?php echo $row['Id_Mascotas']?>">Eliminar</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
  </body>
</html>

