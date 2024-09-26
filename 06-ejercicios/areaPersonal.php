<!-- TERCERA PARTE:

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