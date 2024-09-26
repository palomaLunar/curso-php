<!--  3.EJERCICIO SESIONES Y REDIRECCIONAMIENTO:

PRIMERA PARTE:
    Página de Inicio (index.php):
        Crear un formulario que contenga los siguientes campos:
            Nombre de Usuario: Un campo de texto para ingresar el nombre de usuario.
            Contraseña: Un campo de tipo password para ingresar la contraseña.
            Incluir dos botones:            Entrar: Para iniciar sesión.
            Registrar: Para acceder a la página de registro. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        // Comprobar si existe la sesión iniciada
        if (session_start()) {
            if (isset($_SESSION['usuario'])) {
                // Redirigir al área personal si ya hay sesión iniciada
                header('Location: areaPersonal.php');
                exit;
            }
        }
    ?>
    <main class="container">
        <h1>Inicio de sesion</h1>
        <form action="validaRegistro.php" method="post">
        <div class="usuario">
                <label for="nombre">usuario</label> <input type="text" class="nombre" id="nombre" name="nombre[]">
            </div>
            <div class="password">
                <label for="password">Contraseña</label> <input type="password" class="password" id="password" required name="password[]">
            </div>
           <div> <button type="submit" value="enviarFormulario" name="btnEnviar">Entrar</button></div>
           <div> <button type="submit" value="registrarse" name="btnRegistro" onclick="location.href='registro.php'">Registrarse</button></div>
        </form>
    </main>
    
</body>
</html>