<?php

     $con = mysqli_connect("localhost:3306", "root", "", "policafe");

     $Email = $_POST["email"];
     $Contrasena = $_POST["contrasena"];

     $sentence = "SELECT contraseña FROM cliente WHERE nombre = '$Email'";
     
     $password = mysqli_query($con, $sentence);
     $password = mysqli_fetch_assoc($password);
     
     if($Contrasena == ($password["contraseña"])){
        header('Location:../index.php');
     }else{
        include('register.php');
     }

?>