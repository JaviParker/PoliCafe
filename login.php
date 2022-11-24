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
            <div class="bg"></div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <div class="logo">
                                <img class="logo-size" src="assets/images/logo-light.svg" alt="isai">
                            </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="login.php" class="active">Iniciar Sesion</a><a href="register.php">Registrar</a>
                        </div>
                        <form action="control/login.php" method="POST">
                            <input class="form-control" type="text" name="email" placeholder="E-mail" required>
                            <input class="form-control" type="password" name="contrasena" placeholder="Contraseña" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Ingresar</button>
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
</div>
</body>
</html>