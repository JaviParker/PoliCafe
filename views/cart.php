<!--Conexión-->
<?php
include('control/conexion.php');
?>

<!-- Carrito de compras -->
<div id="mySidenav2" class="sidenav2">
    <a href="javascript:void(0)" class="closebtn2" onclick="closeNav2()">&times;</a>
    <a href="#" class="burger-menu-title">Carrito de compras</a>
    <div id="cartproducts"></div>
    <div id="cart-button">
        <a href="$">Pedir ahora</a>
    </div>
    <p id="pedido_id" hidden>1</p>
</div> 