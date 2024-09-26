<!-- 
2. Crear un formulario de registro que capture diversos datos de un usuario, valide la información ingresada y muestre los resultados en otra página utilizando PHP.Instrucciones:
Crea un formulario HTML con los siguientes campos:
Nombre (campo de texto)
Apellido (campo de texto)
Nombre de Usuario (campo de texto)
Contraseña (campo de contraseña)
Validar Contraseña (campo de contraseña para confirmar la contraseña)
Correo Electrónico (campo de correo electrónico)
Selecciona tus Intereses (Hobbies) (casillas de verificación para múltiples intereses)
Adjuntar Archivo (campo de carga de archivo) imágenes < 3Mb
Valida los datos ingresados en el formulario utilizando PHP:

Asegúrate de que todos los campos requeridos estén completos.
Verifica que las contraseñas coincidan.
Valida el formato del correo electrónico.
Asegúrate de que se haya seleccionado al menos un interés.
Maneja la carga de archivos y asegúrate de que el archivo se ha subido correctamente.
Muestra los datos ingresados por el usuario en otra página utilizando PHP. -->


<?php


//confirmar si han presiponado el boton 
if (isset($_POST["btn-enviar"])) {
    //guardar los datos en una variable 
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
    // echo $hobbies = $_POST["hobbies"];
    // echo "<br>";
    // echo $archivos = $_FILES["adjuntar"];
} else




    //comprobar que no esten vacios
    // Validación de campos obligatorios
    if (empty($nombre)) {
        echo "El campo 'Nombre' es obligatorio";
    }
echo "<br>";
if (empty($nombreUsuario)) {
    echo "El campo 'Nombre de Usuario' es obligatorio";
}
echo "<br>";
if (empty($password)) {
    echo "El campo 'Contraseña' es obligatorio";
}
echo "<br>";
if (empty($password2)) {
    echo "El campo 'Confirmar Contraseña' es obligatorio";
}
echo "<br>";
if (empty($email)) {
    echo "El campo 'Correo Electrónico' es obligatorio";
    //adjuntar archivos name: ["adjuntar"][valor]

    echo $archivo_name = $_FILES["adjuntar"]['name'];
    echo "<br>";
    echo $archivo_type = $_FILES['adjuntar']['type'];
    echo "<br>";
    echo $archivo_size = $_FILES['adjuntar']['size'];
    echo "<br>";
    echo $archivo_rut_temp = $_FILES['adjuntar']['tmp_name'];
    echo "<br>";
    echo $archivo_error = $_FILES['adjuntar']['error'];
    echo "<br>";
    echo "<br>";
} else {
    echo "Error, boton no pulsado";
}
echo "<br>";




// Validación de coincidencia de contraseñas
if ($password != $password2) {
    echo "Las contraseñas no coinciden";
};
if ($password == $password2) {
    echo "contraseña correcta";
}
echo "<br>";




// Validación de formato de correo electrónico
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $email = filter_var($email, FILTER_VALIDATE_EMAIL);
} else {
    echo "formato de email incorrecto mami";
 exit();
}
echo "<br>";



//comprobar si se ha elegido un hobbie 
$hobbie = $_POST["hobbie"];
if (isset($hobbie)) {
    print_r($hobbie);
}
echo "<br>";



if (!empty($archivo_name)) {
    echo "<br>";
    // limitar el tamaño de archivos 
    if (($archivo_size  / 1024) > 3072) {
        echo "el archivo es demasiado grande. el tamaño maximo permitido es 3MB";
        exit();
    }
    if ($archivo_type != "image/png" && $archivo_type != "image/jpeg") {
        echo "el archivo no esta permitido";
        exit();
    }
    echo "<br>";

    //comprovar si la carpeta donde vamos a guardar datos existe regresa un booleano true si existe o 1. file_exists
    if (!file_exists("carpeta")) {
        //aqui mkdir crea una carpeta 
        if (!mkdir("carpeta", 07777)) {
            echo "no se puede crear la carpeta";
            exit();
        }
    }
    echo "<br>";
    //permisos 
    chmod("carpeta", 07777);

    //mover archivo a la carpeta nos regresa un boolano 

    if (move_uploaded_file($archivo_rut_temp, "carpeta/.$archivo_name")) {
        echo "archivo subido correctamente";
    } else {
        "hubo un error al subir el archivo. ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informacion formulario </title>

</head>
<body>
    <main class="container">

    <ul>
        <li>nombre: <?= $nombre; ?></li>
        <li>nombreUsuario: <?= $nombreUsuario; ?></li>
        <li>nombre: <?= $email ; ?></li>
    
    </ul>
    </main>
    
</body>
</html>