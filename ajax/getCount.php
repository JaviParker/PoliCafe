<?php

include('../control/conexion.php');
include('../models/producto.php');

$name = $_REQUEST['n'];
$operation = $_REQUEST['o'];
$new_name = str_replace("_"," ", $name);

$count = getAmount($con, $new_name);

if($operation == "add"){
    $count = intval($count) + 1;
}else if($operation == "subs"){
    $count = intval($count) - 1;
}

if($count>0){
    setAmount($con, $new_name, $count);
}else{
    deleteProduct($con, $new_name);
}


echo $count;

?>