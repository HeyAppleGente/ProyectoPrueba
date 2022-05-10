<?php
include("Conexion.php");
$con=conectar();
$sql="SELECT * FROM historia_clinica";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
/*http://localhost/ejercicios_php/proyecto/php/HistoriaClinica.php*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/VistaAdmin.css">

   
    <title>Historia clinica</title>
    
    
</head>
<body>
<div class="sidebar">
      <h2>AdogT-Aqui</h2>
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
            <span>Registro Mascotas</span>
          </a>
        </li>
        <li>
          <a href="ListaMascotas.php">
            <i class="fas fa-cog"></i>
            <span>Lista Mascotas</span>
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
      
    
    <div class="container">
        <div class="screen">  
            <div class="screen_content">
                <form class="login"  action="InsertarH.php"  method="Post">
                    <div class="login_field">
                        <i class="login_icon fas fa-user"></i>
                        <input type="text" class="login_input" placeholder="Estado" name="Estado">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Esterilización" name="Esterilización">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Esq_Vacunación" name="Esq_Vacunación">
                    </div>
                   
                    <button class="button login_submit">
                        <input type="Submit" value="Registrarse">
                        <i class="button_icon fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
            <div class="screen_background">
                <span class="screen_background_shape screen_background_shape4"></span>
                <span class="screen_background_shape screen_background_shape3"></span>
                <span class="screen_background_shape screen_background_shape2"></span>
                <span class="screen_background_shape screen_background_shape1"></span>
            </div>
        </div>
    </div>
    <h1>Historia Clinica de las Mascotas</h1>
    <table class="cinereousTable">
        <tr>
            <th>Id_Hist Clinica</th>
            <th>Estado</th>
            <th>Esterilización</th>
            <th>Esquema de Vacunación</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($query)){
       
        ?>
        <tr>
            <td><?php echo $row["Id_Hist_Clinica"]?></td>
            <td><?php echo $row["Estado"]?></td>
            <td><?php echo $row["Esterilización"]?></td>
            <td><?php echo $row["Esq_Vacunación"]?></td>
            <td><a href="ActualizarH.php?Id_Hist_Clinica=<?php echo $row['Id_Hist_Clinica']?>">Editar</a></td>
            <td><a href="EliminarH.php?Id_Hist_Clinica=<?php echo $row['Id_Hist_Clinica']?>">Eliminar</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</body>
</html>