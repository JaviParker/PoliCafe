<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoliCafe</title>
    <link rel="stylesheet" type="text/css" href="css/PoliCafe-style.css">
    <link rel="stylesheet" type="text/css" href="css/PoliCafe-theme.css">
</head>
<body>
    <div class="form-body">
        <!--Logo principal transparente-->
        <?php
        include('views/logo.php');
        ?>
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="#">
                                <div class="logo">
                                    <img class="logo-size" src="assets/images/logo-light.svg" alt="">
                                </div>
                            </a>
                        <div class="page-links">
                            <a href="login.php">Iniciar sesion</a><a href="register.php" class="active">Registrarse</a>
                        </div>
                        <form action="control/registro.php" method="POST">
                            <input class="form-control" type="text" name="name" placeholder="Nombre Completo" required>
                            <input class="form-control" type="email" name="email" placeholder="Direccion de correo electronico" required>
                            <input class="form-control" type="contraseña" name="contrasena" placeholder="Contraseña" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Registrarse</button>
                            </div>
                        </form>
                        <!--Links con redirecciones-->
                        <?php
                        include('views/social-media-links.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>