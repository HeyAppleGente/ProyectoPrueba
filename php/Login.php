
<!-- Empieza el HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Login.css">
    <link rel="stylesheet" href="Password.js">
    <link rel="shortcut icon" href="https://fontawesome.com/v4/icons/" type="image/x-icon">
    
</head>
<body>
    <div class="container">
        <div class="screen">  
            <div class="screen_content">
                <form class="login" method="Post" action="../VistaAdmin.html">
                    <div class="login_field">
                        <i class="login_icon fas fa-user"></i>
                        <input type="text" class="login_input" placeholder="Nombre" name="Nombre">
                    </div>
                    <div class="login_field">
                        <i class="login_icon fas fa-lock"></i>
                        <input type="password" class="login_input" placeholder="Contraseña" name="Contraseña">
                    </div>
                    <button class="button login_submit">
                        <input type="Submit" value="Ingresar">
                        <i class="button_icon fas fa-chevron-right"></i>
                    </button>
                </form> 
                <div class="social-login">
                    <h3>Bienvenido</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login_icon fab fa-instagram"></a>
                        <a href="#" class="social-login_icon fa fa-facebook-official"></a>
                        <a href="#" class="social-login_icon fab fa-twitter"></a>
                    </div>
                </div>
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