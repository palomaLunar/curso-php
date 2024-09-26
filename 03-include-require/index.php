<?php

//include : inserta otro archivo en nuestro documento php, si contienen errores continua la ejecucion 

//require : inserta otro archivo en nuestro documento php, si contiene errores no sigue ejecutando 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'header.php';
    echo "<br> Estoy entre include y require" ?>
    <?php include 'header.php'; ?>
    <?php include_once 'header.php' ?>
    <?php  include_once 'funciones.php' ?>

    <div>
    <?php 
    $a = 5;
    $b = 43;
    echo suma ($a, $b);
    echo "<br>";
    echo resta ($a, $b);
    echo "<br>";
    echo multiplica ($a, $b);
    echo "<br>"; 
    ?>
    </div>


    <?php 
    // $dato = $_POST ['dato'];
    ?>
    <form action="validarformulario.php" method="post">
        <label for="nombre"> Dato:
            <input type="text" name="usuario" id="nombre">
        </label>
        <br>
        <label for="pass">contraseña:
            <input type="password" name="pass" id="contraseña">
        </label>
        <input type="submit" value="Enviar">

    </form>
   
</body>
</html>