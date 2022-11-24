<?php

    include('../control/conexion.php');
    include('../models/producto.php');

    $name = $_REQUEST['n'];
    $price = $_REQUEST['p'];
    $count = $_REQUEST['c'];
    $user = 12;
    $pedido = 1;

    $data = [$name,$price,$count,$user,$pedido];

    addPedido($con, $user);
    addToCart($con, $data);


?>

