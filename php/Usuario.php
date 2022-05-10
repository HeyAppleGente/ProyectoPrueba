<?php
include("Conexion.php");
$con=conectar();

    $sql="SELECT *  FROM clientes";
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
    <link rel="shortcut icon" href="https://fontawesome.com/v4/icons/">
    
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
                <form class="login"  action="InsertarU.php"  method="Post">
                    <div class="login_field">
                        <i class="login_icon fas fa-user"></i>
                        <input type="text" class="login_input" placeholder="Nombre" name="Nombre">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Apellidos" name="Apellidos">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Identificacion" name="Identificacion">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Telefono" name="Telefono">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Tele_Movil" name="Telefono_Movil">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="text" class="login_input" placeholder="Correo" name="Correo">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="password" class="login_input" placeholder="Contraseña" name="Contraseña">
                    </div>
                    <select name="Rol">
                     <option value="0" style="display:none;"><label>Seleccionar</label></option>
                     <option value="Usuario">Usuario</option>
                     <option value="Admin">Administrador</option>
                    </select>
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