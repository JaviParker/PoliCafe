<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoliCafe</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <script src="bootstrap/js/jquery-3.5.1.slim.js"></script>
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="../PoliCafe/css/index.css">
    <link rel="shortcut icon" href="assets/images/logo.png">
  </head>
  <body>
    <!--Header-->
    <?php
    include ('views/header.php');
    ?>

    <!--Categorias-->
    <?php
    include ('views/categories.php');
    ?> 

    <!--Contenido principal (cards)-->
    <main class="container">
      <section class='row products-line'>
        <?php
        include('views/card.php');
        ?>
      </section>
    </main>

      <!--Modal con información de cada card-->
      <?php
      include ('views/modal.php');
      ?>
  </body>
</html>