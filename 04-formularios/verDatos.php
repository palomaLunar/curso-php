<?php
echo $nombre = $_POST["nombre"];
echo "<br>";
echo $apellido = $_POST["apellido"];
echo "<br>";
echo $email = $_POST["email"];
echo "<br>";
echo $nombreUser = $_POST["nombreUsuario"];
echo "<br>";
echo $password = $_POST["password"];
echo "<br>";
echo $ciudad = $_POST["ciudad"];
echo "<br>";
// echo $paises = $_POST['paises'];
// $horario = $_POST["horario"];
// echo $resultado = isset($horario)? "es distinta de NULL:" . $horario : "NO esta definida";
// echo "<br>";


//!funciones para validar valor de una variable
//is_null regresa valores booleanos  true si es null o false si no lo es  
$numero = NULL;
echo $resultado = is_null($numero) ? "es nulo " : "no es nulo";

echo "<br>";

if (is_null($numero)) {
    echo "es nulo";
    echo "<br>";
} else {
    echo "no es nulo";
    echo "<br>";
}

//EMPTY() comprueba si una variable esta vacia, nos regresa un booleano

echo $resultado = empty($nombre) ? "nombre vacio" : $nombre;
echo "<br>";
echo $resultado = empty($email) ? "no existe correo" : $email;
echo "<br>";

// Determinar si una variable esta definida y no es NULL.
echo $resultado = isset($horario) ? "Es distinto de NULL" : "NO ESTA DEFINIDA";
echo "<br>";
//PAISES 
$paises = $_POST["paises"];
if (isset($paises)) {
    print_r($paises);
}

echo "<br>";
//horarios <
$horario = $_POST["horario"];
if (isset($horario)) {
    print_r($horario);
}

echo "<br>";
//adjuntar archivos 

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
    if (!file_exists("archivos")) {
        //aqui mkdir crea una carpeta 
        if (!mkdir("archivos", 07777)) {
            echo "no se puede crear la carpeta";
            exit();
        }
    }
    echo "<br>";
    //permisos 
    chmod("archivos", 07777);

    //mover archivo a la carpeta nos regresa un boolano 

    if (move_uploaded_file($archivo_rut_temp, "archivos/.$archivo_name")) {
        echo "archivo subido correctamente";
    } else {
        "hubo un error al subir el archivo. ";
    }
}
echo "<br>";

//encriptar contraseñas 

$clave = "Carlitos34";
 echo $clave;
 echo "<br>";
 echo md5($clave);
 echo "<br>"; 
 $claveEncriptada = password_hash($clave, PASSWORD_DEFAULT);
 echo "<br>";
 echo $claveEncriptada;


 //verificar que la clave encriptada coincide 

 $clave_usuario = "carlitos34";
 echo "<br>";
 if (password_verify($clave, $claveEncriptada)) { //corecta
    // if (password_verify($clave_usuario, $claveEncriptada)) { // incorecta 
    echo "contraseña correcta";
 } else {
    echo "contraseña incorrecta";
 }

for ($i = 0; $i < 10; $i++){
    echo "<br>";
}