<?php 
//bucle for 

for ($i = 0; $i <20; $i++)
{
    echo "iteracion $i <br>";
}
 //recorer un array con count
$usuarioUno = ["carlos", "valladolid", 35, "casado"];
for ($i = 0; $i < count($usuarioUno); $i++) {
    echo "elemento " . $usuarioUno[$i] . "<br>";
}

//recorer una cadena string 

$miCadena = "hola mundo ";

for ($i=0; $i < strlen($miCadena); $i++) {

   
    echo $miCadena[$i] . "-";
}

$contador = 0;

for ($i=0; $i < strlen($miCadena); $i++) {
    if ($miCadena[$i] == "o" || $miCadena[$i] == "O") {
        $contador++;
    }
    echo $miCadena[$i] . "-";
}

echo "<br> en la cadena:  '$miCadena' existen $contador '0'";

echo "<hr/>";
echo "<br>";


// bucle foreach

$usuarioDos = ["lorenzo", "valladolid", 35, "casado"];

foreach ($usuarioDos as $indice => $valorelemento) {
   echo "$indice : $valorelemento";
} echo "<br>";
//arary asociativo
$usuario3 = 
["nombre: " => "maria",
"apellido: " => "pancracia",
"edad: "  => 28,
"estado civil" => "casada",];

foreach ($usuario3 as $parametro => $valorparametro) {
    echo "$indice: $valorparametro";
} echo "<br>";
// 5. Debes crear un programa en PHP que imprima la tabla de multiplicar de un número dado por el usuario. El programa debe mostrar la tabla de multiplicar desde 1 hasta 12 tanto en orden ascendente como descendente.

// Requisitos:
// Debes implementar una función que reciba como parámetro el número, y devuelva:
//   - La tabla de multiplicar del número ingresado desde 1 hasta 12 en orden ascendente.
//   - La tabla de multiplicar del número ingresado desde 12 hasta 1 en orden descendente.



function tablaMultiplicar($numero) {
  // Validar entrada
  if (!is_numeric($numero) || $numero < 1) {
    echo "Error: El número debe ser un valor numérico mayor que 0.\n";
    return;
  }

  // Tabla ascendente
  echo "Tabla de multiplicar del $numero (ascendente):\n";
  for ($i = 1; $i <= 12; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
  }

  echo "<br>";; // Salto de línea

  // Tabla descendente
  echo "Tabla de multiplicar del $numero (descendente):\n";
  for ($i = 12; $i >= 1; $i--) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
  }
}

// Solicitar número al usuario
$numero = readline("Ingrese un número: ");

// Imprimir tabla
tablaMultiplicar(7);
echo "<br>";

// 6. Crear un programa en PHP que imprima los números del 1 al 10 separados por comas, sin que la última coma se imprima al final.

for ($i = 1; $i <= 10; $i++) {
  if ($i < 10) {
    echo "$i, ";
  } else {
    echo "$i";
  }
}
echo "<br>";


$numeros = range(1, 10);
$numerosString = implode( "  , ", $numeros);
echo $numerosString;
echo "<br>";
//7. Descripción del Problema:


// Debes crear un programa para determinar si un alumno aprueba o suspende el curso. El alumno aprueba si el promedio
// de cinco asignaturas es mayor o igual a 5.0, y cumple con ciertos requisitos adicionales.

// Reglas de Cálculo:

// Promedio de Asignaturas:
// Cada una de las cinco asignaturas tiene el mismo peso en el cálculo del promedio.

// Requisitos de Asistencia:
// El alumno debe haber asistido al menos al 75% de las clases para aprobar.

// Niveles de Aprobación:
// Promedio >= 9.0: Sobresaliente.
// Promedio >= 5.0 y < 9.0: Aprueba.
// Promedio < 5.0: Suspende.

// Instrucciones:
// - Debes implementar una función determinarResultado($calificaciones, $asistencia) que recibirá como parámetros un array de cinco calificaciones, el porcentaje de asistencia.
// - La función debe aplicar todas las reglas y retornar el resultado final (Aprobado, Sobresaliente o Suspende).
// - No puedes utilizar funciones propias del lenguaje que realicen los cálculos de manera automática, debes implementar la lógica manualmente.


function determinarResultado ($calificaciones, $asistencias){
  //calculamos el promedio empezando el contador en ceros  
  $promedioAsignaturas = 0;
 //recorremos con un bucle foreach par alamacenar los valores en calificacion de cada materia. 
 foreach ($calificaciones as $calificacion) {
  if (!is_numeric($calificacion)) {
    return "Error: Las calificaciones deben ser valores numéricos.";
}
 $promedioAsignaturas += $calificacion;
 }
 $promedio = $promedioAsignaturas / 5;

 //calcular promedio de asistencia 

 if ($asistencias < 75) {
   return "suspende por inasistencias";
 }
 // evaluar si es sobresaliente, pasa o suspende por promedio 
 if ($promedio >= 9.0) {
  $resultado = "sobresaliente ";
 }
 elseif ($promedio >= 5.0) {
  $resultado = "aprobado ";
 }
 else if ($promedio < 5.0) {
  $resultado = "suspendido por promedio";
 }
  return $resultado;
};

$calificaciones = [7.0, 4.0, 6.5, 9.0, 9.7];
$asistencias = 70;

echo determinarResultado($calificaciones, $asistencias);
// echo "Resultado: $resultado";

echo "<br>";




//! resoolviendo el problema con el profesor 


function resultadoFinal ($PromCalificacion, $asistenciaEnClase) {
  $nota =0;
  for( $i=0; $i < count($PromCalificacion); $i++) {
    $nota = $nota + $PromCalificacion[$i];
  };
 $notaFinal = $nota / 5 ;
 $notaFinal = array_sum($PromCalificacion)/ count($PromCalificacion);

 if($asistenciaEnClase < 75) {
  return "suspendido por faltas";
 }

 if ($notaFinal >= 9.0){
  return "sobresaliente ";
 }
 elseif ($notaFinal >= 5.0) {
  return "aprobado ";
 }
 else {
  return "suspendido por promedio ";
 }
}

$misNotas = [5.4, 6.0, 9.0, 8.0, 6.0];
$asistenciaEnClase = 80;

echo resultadoFinal($misNotas, $asistenciaEnClase);
echo "<br>"
?>
<?php

//sentencias break: finaliza la ejecucion de la estructura de control en curso 
echo "<br/> break: <br>";
$pc= ["monitor", "teclado", "auriculares", "telefono", "impresora", "raton"];
foreach ($pc as $componente) {
  if ($componente == "telefono") {
    break;
  }
  echo $componente . "<br>";

}
echo "<br/> continue: <br>";
//continue : omite o finaliza la iteraccion actual y pasa a la siguiente iteracion

foreach ($pc as $componente) {
  if ($componente == "telefono"){
    continue;
  }
   echo $componente . "<br>";
}

?>
<?php 
$cadena = "saludo a todos como estan?";
echo strtolower($cadena) . "<br>";
echo strtoupper($cadena) . "<br>";
echo ucfirst($cadena) . "<br>";
echo ucwords($cadena) . "<br>";
$longcadena = strlen($cadena);
echo $longcadena . "<br>";
$palabras= str_word_count($cadena);
echo $palabras . "<br>";

//de string a array por explode que separar los elementos segun los espacios o comas lo que tu pongas ensseeguida entre las comillas 

$arrayCadena = explode("  ", $cadena, 2);
print_r($arrayCadena);
echo "<br>";

//matematicas ese

echo rand(1,200);//numero aelatorio 20 
$num = 4.6;
echo "<br>";
echo floor($num);// numero redondeado hacia abajo 4
echo "<br>";
echo ceil($num);//numero redondeado hacia arriba 5

