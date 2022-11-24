<!--Header de la sección principal-->
<header>
  <section class="container top">
    <div class="row navbar">
      <div class="col menu">
        <span onclick="openNav()"><img src="./assets/images/burger-menu-icon.png" alt="se supone que aqui va el menu"></span>
      </div>

      <div class="col" align="center">
        <img class="logo" src="./assets/images/logo.png" alt="">
      </div>
       
      <div class="col cart-icon">
        <span onclick="openNav2()" onmouseover="getCart()"><img class="cart" src="./assets/images/cart-icon.png" width="30" ></span>
      </div>
    </div>
  </section>
</header>

<!--Carrito de compras-->
<?php
include ('views/cart.php');
?> 

<!--Menu de hamburguesa-->
<?php
include ('views/burger-menu.php');
?>

<!-- Zona difuminada anticlicks -->
<div id="black-zone" class="" onclick="closeAll()"></div>