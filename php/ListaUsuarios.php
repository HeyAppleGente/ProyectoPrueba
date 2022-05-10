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
        <?php
        include("Conexion.php");
        $con=conectar();
        
            $sql="SELECT *  FROM clientes";
            $query=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($query);
        
           
        ?>
        
        <h1>lista de clientes</h1>
            
            <table class="cinereousTable">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Identificacion</th>
                    <th>Telefono</th>
                    <th>Tele_Movil</th>
                    <th>Correo</th>
                    <th>Rol</th>
                </tr>
                <?php
                while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row["Nombre"]?></td>
                    <td><?php echo $row["Apellidos"]?></td>
                    <td><?php echo $row["Identificacion"]?></td>
                    <td><?php echo $row["Telefono"]?></td>
                    <td><?php echo $row["Telefono_Movil"]?></td>
                    <td><?php echo $row["Correo"]?></td>
                    <td><?php echo $row["Rol"]?></td>
                    <td><a href="ActualizarU.php?Identificacion=<?php echo $row['Identificacion']?>">Editar</a></td>
                    <td><a href="EliminarU.php?Identificacion=<?php echo $row['Identificacion']?>">Eliminar</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
    </div>
  </body>
</html>