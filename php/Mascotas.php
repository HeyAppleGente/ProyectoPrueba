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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../css/Registro.css">
    
    <link rel="stylesheet" href="../css/VistaAdmin.css">
    <link rel="shortcut icon" href="https://fontawesome.com/v4/icons/" type="image/x-icon">
    
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
      
    </div>
    <div class="container">
        <div class="screen">  
            <div class="screen_content">
                <form class="login"  action="InsertarM.php"  method="Post">
                    <div class="login_field">
                        <i class="login_icon fas fa-user"></i>
                        <input type="text" class="login_input" placeholder="Nombre" name="Nombre">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Genero" name="Genero">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Id_Raza" name="Id_Raza">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Edad" name="Edad">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Tamaño" name="Tamaño">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="file" class="login_input" placeholder="Foto" name="Foto">
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
    
</body>
</html>