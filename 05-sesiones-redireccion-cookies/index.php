<?php 
session_name("LOGIN");
session_start();






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container">
        <?php 
        if (isset($_SESSION["error"])){
            echo "Error; " . $_SESSION["error"];
        }
        ?>
        
        <h1>login</h1>
        <form action="login.php" method="post">
            <div class="usuario">
                <label for="nombre">usuario</label> <input type="text" class="nombre" id="nombre" name="nombre">
            </div>
            <div class="password">
                <label for="password">Contraseña</label> <input type="password" class="contraseña" id="contraseña" required name="password">
            </div>
            <div> 
            <input type="submit" value="Enviar formulario" name="btnenviar">
                </div>
            </form>
    </main>
    <!-- 3.EJERCICIO SESIONES Y REDIRECCIONAMIENTO:

PRIMERA PARTE:
    Página de Inicio (index.php):
        Crear un formulario que contenga los siguientes campos:
            Nombre de Usuario: Un campo de texto para ingresar el nombre de usuario.
            Contraseña: Un campo de tipo password para ingresar la contraseña.
            Incluir dos botones:            Entrar: Para iniciar sesión.
            Registrar: Para acceder a la página de registro.

    Página de Registro (registro.php):
        Crear un formulario con los siguientes campos:
            Nombre Completo: Un campo de texto para ingresar el nombre completo del usuario.
            Nombre de Usuario: Un campo de texto para ingresar el nombre de usuario.
            Contraseña: Un campo de tipo password para ingresar la contraseña.
            Confirmación de Contraseña: Un campo de tipo password para confirmar la contraseña.
            Email: Un campo de texto para ingresar la dirección de correo electrónico.
        Incluir un botón:
            Registrar: Al hacer clic, el formulario debe enviarse y procesarse para registrar al usuario.

SEGUNDA PARTE: 

Validación del Registro (validaRegistro.php):
    Crear un archivo PHP llamado validaRegistro.php que se encargue de validar los datos del registro.
    Los datos del registro se deben validar antes de almacenarlos.
    La contraseña debe estar encriptada antes de almacenarla.    
    Almacenar el nombre de usuario, la contraseña y el resto de datos en un array.
    

Funcionalidad de Validación en Index:
    Crear un nuevo archivo o función en validaRegistro.php que se encargue de comprobar que el usuario y la contraseña introducidos en el formulario de inicio de sesión (index.php) son correctos.
    Esta función debe recibir el nombre de usuario y la contraseña, y verificar si coinciden con los datos almacenados en el array.
    La contraseña debe compararse de forma encriptada.

TERCERA PARTE:

Página de Área Personal (areaPersonal.php):
    Crear un archivo PHP llamado areaPersonal.php que se encargue de mostrar la información del usuario una vez haya iniciado sesión correctamente.

Contenido del Header:
    En el header de areaPersonal.php se debe mostrar la frase: "Área personal de [nombre de usuario]", donde [nombre de usuario] se reemplazará dinámicamente con el nombre de usuario del usuario que ha iniciado sesión.
    En el otro extremo del header, incluir un botón para cerrar sesión.

Contenido del Main:
    En el cuerpo principal (main) de areaPersonal.php, mostrar los datos introducidos en el formulario de registro, excepto la contraseña.
    Los datos a mostrar incluyen:
        Nombre Completo
        Nombre de Usuario
        Email

Cerrar Sesión:
    Al hacer clic en el botón de cerrar sesión, el usuario debe ser redirigido de nuevo a la página de inicio (index.php) y su sesión debe cerrarse correctamente.

Funcionalidad de Cerrar Sesión:
    Al hacer clic en el botón de cerrar sesión en areaPersonal.php, se debe llamar a una función en validaRegistro.php o a otra página, si lo estima necesario, que se encargue de cerrar la sesión del usuario actual.
    Esta función debe:
        Destruir la sesión actual del usuario.
        Redirigir al usuario de nuevo a la página de inicio (index.php). -->

</body>
</html>
