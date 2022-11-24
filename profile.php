<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <link rel="stylesheet" type="text/css" href="css/profile-style.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
    <section class="seccion-perfil-usuario">
            <!--Header de la sección de perfil-->
            <?php
            include('views/profile-header.php');
            ?>

            <!--Body de la sección de perfil-->
            <?php
            include('views/profile-body.php');
            ?>
            
            <!--Footer de la sección de perfil-->
            <?php
            include('views/profile-footer.php');
            ?>
    </section>
</body>
</html>