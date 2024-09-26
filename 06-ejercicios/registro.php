<!-- Página de Registro (registro.php):
        Crear un formulario con los siguientes campos:
            Nombre Completo: Un campo de texto para ingresar el nombre completo del usuario.
            Nombre de Usuario: Un campo de texto para ingresar el nombre de usuario.
            Contraseña: Un campo de tipo password para ingresar la contraseña.
            Confirmación de Contraseña: Un campo de tipo password para confirmar la contraseña.
            Email: Un campo de texto para ingresar la dirección de correo electrónico.
        Incluir un botón:
            Registrar: Al hacer clic, el formulario debe enviarse y procesarse para registrar al usuario. -->
            <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro </h1>
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
    <form action="validaRegistro.php" method="post">
    <label for="nombre"> Nombre:
        <input type="text" name="nombre" id="nombre">
      </label>
      <br>
      <label for="nombreUsuario">Nombre De Usuario:
        <input type="text" name="nombreUsuario" id="nombreUsuario">
      </label>
      <br>
     <label for="password">Contraseña:
        <input type="password" name="password" id="password">
      </label>
      <br>
      <label for="password">Confirme Contraseña:
        <input type="password" name="password2" id="password2">
      </label>
      <br>
      <label for="email">Email:
        <input type="email" name="email" id="email">
      </label>
       <button type="submit" value="registrarse" name="btnRegistro" onclick="location.href='validaRegistro.php'">Registrarse</button></div>
    </form>
</body>
</html>