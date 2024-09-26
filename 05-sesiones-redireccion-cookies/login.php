<?php 
//comprobar si pulsas el boton
if(isset($_POST["btnenviar"])) {

    session_name("LOGIN");
    session_id("login1");
    //crear una sesion
    session_start();
}

$usuario = $_POST["nombre"];
$password = $_POST["password"];

//variable de sesion;
$_SESSION["logeando"] = false;
$_SESSION["error"] = ""; //Pra mostrar el error en caso de error 

if ($usuario == "David" && $password == "1234") {
    $_SESSION["usuario"] = $usuario;
    $_SESSION["logeando"] = true;
    header ("location: verUsuario.php");
    exit();
} else {
    $_SESSION["error"] = "usuario o contraseña incorrectos";
    header("location: index.php");
    exit();
}