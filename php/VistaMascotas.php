<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de mascota</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylemascotas.css">
</head>
<?php
include("Conexion.php");
$con=conectar();

    $sql="SELECT *  FROM Mascotas";
    $query=mysqli_query($con,$sql);
    $row=$query->fetch_assoc();

   
?>
<body>
    <header>
        <div>
            <div class="header">
                <div class="nombre">
                    <h1>AdogT-Aqui</h1>
                </div>
                <ul>
                    <li><a href="../inicio.html">Inicio</a></li>
                    <li><a href="sobrenosotros.html">Sobre nosotros</a></li>
                    <li><a href="../Login.html">Login</a></li>
                </ul>
            </div>
        </div>
        </div>

    </header>



    <main class="contenedor">
        <h1>Mi Perfil</h1>

        <div class="miperfil">
        <img height="500px" src="data:image/jpg;base64,<?php echo base64_encode($row['Foto']); ?>">

            <div>
                <p class="perf" >Nombre: <?php echo $row["Nombre"]?></p>
                <p class="perf">Tamaño: <?php echo $row["Tamaño"]?></p>
                <p class="perf">Edad: <?php echo $row["Edad"]?></p>
                <p class="perf">Descripcion: <?php echo $row["Descripcion"]?></p>
                <a class="Boton" href="../formulario.html" style="border: 2px solid black;" width="100px;" height="30px;">Formulario</a>

            </div>
        </div>
    </main>
    
    <footer>
        <div class="container-all">
            <div class="container-body">
                <div class="colum1">
                    <h1>Más información de la fundación</h1><br>
                    <p>Intentamos mejorar la vida de los animales que están en situación de <br> maltrato y/o abandono. Aliviar su sufrimiento y darles un lugar importante  en nuestra sociedad. <br>
</p>
                </div>
                <div class="colum2">
                    <h1>Redes sociales</h1>
                    <div class="row">
                        <img src="../img/facebook (1).png">
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <img src="../img/instagram (1).png">
                        <label>Siguenos en Instagram</label>
                    </div>
                    <div class="row">
                        <img src="../img/twitter (1).png">
                        <label>Siguenos en Twitter</label>
                    </div>
                </div>
                <div class="comlum3">
                    <h1>Contacto</h1>
                    <div class="row2">
                        <img src="../img/alfiler.png">
                        <label>Visitanos en: <br>
                        Dirección <br>
                        Ciudad
                    </label>
                    </div>
                    <div class="row2">
                        <img src="../img/telephone-call.png">
                        <label>+57 número</label>
                    </div>
                    <div class="row2">
                        <img src="../img/email.png">
                        <label>Correo electronico</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-ftr1">
            <div class="footer">
                <div class="copyright">
                    © 2022 Todos los derechos reservados | <a href="inicio.html">Fundación</a>
                </div>
                <div class="inf">
                    <a href="sobrenosotros.html">Fundación</a> |
                    <a href="">Política de Privacidad</a> |
                    <a href="Terminos.html">Terminos y condiciones</a>
                </div>
            </div>
        </div>
        </div>

    </footer>
</body>

</html>