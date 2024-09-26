<?php 
session_name("LOGIN");
session_start();






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver usuarios</title>
</head>
<body>
    hola <?= $_SESSION["usuario"];?>
    <br>
    <a href="cerrarSesion.php">cerrar sesion</a>
    
</body>
</html>