<!-- SEGUNDA PARTE: 

Validación del Registro (validaRegistro.php):
    Crear un archivo PHP llamado validaRegistro.php que se encargue de validar los datos del registro.
    Los datos del registro se deben validar antes de almacenarlos.
    La contraseña debe estar encriptada antes de almacenarla.    
    Almacenar el nombre de usuario, la contraseña y el resto de datos en un array.

    Funcionalidad de Validación en Index:
    Crear un nuevo archivo o función en validaRegistro.php que se encargue de comprobar que el usuario y la contraseña introducidos en el formulario de inicio de sesión (index.php) son correctos.
    Esta función debe recibir el nombre de usuario y la contraseña, y verificar si coinciden con los datos almacenados en el array.
    La contraseña debe compararse de forma encriptada. -->

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


<?php
//guardar los datos en una variable para comprobar 
echo $nombre = $_POST["nombre"];
echo "<br>";
echo $nombreUsuario = $_POST["nombreUsuario"];
echo "<br>";
echo $password = $_POST["password"];
echo "<br>";
echo $password2 = $_POST["password2"];
echo "<br>";
echo $email = $_POST["email"];
echo "<br>";

//validar si los campos estan vacios 

if (empty($nombre)) {
    echo "El campo 'Nombre' es obligatorio";
} else {
    $name = $nombre;
    echo "<br>";
}


if (empty($nombreUsuario)) {
    echo "El campo 'Nombre de Usuario' es obligatorio";
} else {
    $usuario = $nombreUsuario;
    echo "<br>";
}


if (empty($password)) {
    echo "El campo 'Contraseña' es obligatorio";
    echo "<br>";
}



if (empty($password2)) {
    echo "El campo 'Confirmar contraseña' es obligatorio";
    echo "<br>";
}


if (empty($email)) {
    echo "El campo 'Correo Electrónico' es obligatorio";
} else {
    $correo = $email;
}

//encriptar la contraseña 
//variable de sesion;
// $_SESSION["logeando"] = false;
// $_SESSION["error"] = ""; //Pra mostrar el error en caso de error 
// if ($usuario == "David" && $password == "1234" && $password2 == "1234") {
//     $_SESSION["usuario"] = $usuario;
//     $_SESSION["logeando"] = true;
//     header("location: areapersonal.php");
//     exit();
// } else {
//     $_SESSION["error"] = "usuario o contraseña incorrectos";
//     header("location: index.php");
//     exit();
// }


// Validación de coincidencia de contraseñas
if ($password != $password2) {
    echo "Las contraseñas no coinciden";
    echo "<br>";
} elseif ($password == $password2) {
    $contrasena = $password;
}
echo "<br>";
 
$contrasenaEncriptada = password_hash($clave, PASSWORD_DEFAULT);
echo "<br>";
echo $contrasenaEncriptada;