<?php

// Incluimos el archivo de funciones
include('index.php');

// Recuperamos los datos del formulario
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

//creamos la funcion para la operacion 
function realizarOperacion($num1, $num2, $operacion)
{

    switch ($operacion) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: División por cero";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Operación no válida";
    }
}

// Validamos que se hayan enviado los datos
if (isset($num1) && isset($num2) && isset($operacion)) {

    // llamamos a la funcion 
    $resultado = realizarOperacion($num1, $num2, $operacion);

    // Mostramos el resultado
    echo "El resultado de la operación $num1 $operacion $num2 es: $resultado";
    echo "<br>";
}
