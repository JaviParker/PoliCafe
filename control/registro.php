<?php

$con = mysqli_connect("localhost:3306", "root", "", "policafe");

$Name = $_POST["name"];
$Email = $_POST["email"];
$Contrasena = $_POST["contrasena"];

$c = "INSERT INTO cliente(nombre,contraseña) values ('{$Email}','{$Contrasena}')";

$query = mysqli_query($con,$c);

//$row = mysqli_fetch_array($query);

header("Location:../index.html")


?>  