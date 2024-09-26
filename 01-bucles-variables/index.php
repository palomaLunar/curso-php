<!---->
<?php
// Comentario en línea
/* Comentario en bloque*/
#otro comentario

// Declaración de variables

//string
$nombreDeUsuario = "Juan";
$apellido_de_usuario = "Perez";

//number o integer
$edad = 30;

//boolean
$estatus = false;

//float
$decimal = 0.4;

echo $nombreDeUsuario . "<br>";
echo "El apellido de usuario es " . $apellido_de_usuario . "<br>";
echo "La edad de usuario es $edad <br>";

//Comprobar el tipo de variable
echo "El tipo de variable de $decimal es:" . gettype($decimal);
echo "<br>";
echo 'El tipo de variable de $decimal es:' . gettype($decimal);
echo "<br>";
echo var_dump($estatus);

//Métodos para comprobar el tipo de variable
echo "<br>";
echo var_dump(is_int($nombreDeUsuario)); // false o 0
echo "<br>";
echo is_float($decimal); // true o 1
echo "<br>";
echo is_string($apellido_de_usuario) . "<br>"; // true o 1


// Variable de tipo Array
$miArray = ["Elemento1", 2, true, $decimal];
echo $miArray[0] . "<br>";
$miOtroArray = array("Elemento1", 2, true, $decimal);
echo $miOtroArray[3] . "<br>";
// Añadir un elemento al array

$miArray[] = "Final";
echo $miArray[4] . "<br>";
$miOtroArray[] = "Entrada otro array";
echo $miOtroArray[4] . "<br>";

// 
array_pop($miArray);
array_unshift($miArray, "Primero");

print_r($miArray);
echo "<br>";

//Recorrer un elemento del array
foreach ($miArray as $indice => $elemento) {
  echo "$indice = $elemento" . "<br>";
}

echo "<pre>";
print_r($miArray);
echo "</pre>";


// Array associativo
$miArrayAsociativo = array(
  "nombre" => "Juan",
  "apellido" => "Perez",
  "edad" => 34
);

echo $miArrayAsociativo["nombre"] . "<br>";
foreach ($miArrayAsociativo as $clave => $valor) {
  echo "$clave = $valor" . "<br>";
}

echo "<br>";
$misUsuarios = [
  "nombre" => "David",
  "apellido" => "García",
  "edad" => 36,
  "Ciudad" => "Valladolid"
];
foreach ($misUsuarios as $clave => $valor) {
  echo "$clave = $valor" . "<br>";
}

$edad = 60;
$nombreDeUsuario = "David";
// Declar un funcion
function nombre($edad, $nombre)
{
  echo "Mi nombre es $nombre y tengo $edad años" . "<br>";
}
//Llamamos a la función:
nombre($edad, $nombreDeUsuario);

// if, else if, else
$edad = 60;
if ($edad < 10) {
  echo "Eres un niño" . "<br>";
} elseif ($edad < 40) {
  echo "Eres joven" . "<br>";
} else {
  echo "Eres mayor" . "<br>";
}
?>
<?php if ($edad < 10) : ?>
  <h2>Eres un niño</h2>
<?php elseif ($edad < 40) : ?>
  <h2>Eres joven</h2>
<?php else : ?>
  <h2>Eres mayor</h2>
<?php endif; ?>

<?php
/************************************* */
// EJERCICIO1
function poligono($poligono)
{
  if ($poligono["tipo"] == "triangulo") :
    echo "El área del triángulo es: " . ($poligono['base'] * $poligono['altura']) / 2;
  elseif ($poligono["tipo"] == "cuadrado") :
    echo "El área del cuadrado es: " . ($poligono['lado'] ** 2);
  elseif ($poligono["tipo"] == "rectangulo") :
    echo "El área del rectángulo es: " . ($poligono['base'] * $poligono['altura']);
  else :
    echo "El polígono no es válido";
  endif;
}

$triangulo = [
  "tipo" => "triangulo",
  "base" => 3,
  "altura" => 6,

];
$cuadrado = [
  "tipo" => "cuadrado",
  "lado" => 5
];
$rectangulo = [
  "tipo" => "rectangulo",
  "base" => 10,
  "altura" => 8
];

echo poligono($triangulo) . "<br>";
echo poligono($cuadrado) . "<br>";
echo poligono($triangulo) . "<br>";
/*************************************** */
// CONSTANTES 
define("URL_IMG", "https://muchocodigo.com/wp-content/uploads/2013/11/php.jpg");

const NOMBRE = "Nombre permanete";
echo "<br>";
echo NOMBRE;
echo "<br>";
?>

<img src="<?= URL_IMG ?>" alt="logo php">
<?php
echo "<br>";

$valor = 34;
function muestra()
{
  global $valor;
  $valor = 50;
  echo $valor . " <br>";
}
echo muestra();

echo $valor;

// Variables estáticas 
function variableEstatica()
{
  static $contador = 0;
  $contador++;
  echo $contador . "<br>";
}
echo "<br>";
variableEstatica();
variableEstatica();
variableEstatica();
variableEstatica();
variableEstatica();
echo "<br>";

//Condicional ternarios
$a = 10;
$b = 20;
$mayor = ($a > $b)
  ? $a
  : $b;


echo "El número mayor es: " . $mayor . "<br>";

$edad = 50;
$name = "maria";

//Switch
switch ($name) {
  case "maria":
    echo "Eres menor de edad <br>";
    break;
  case "Juan":
    echo "Eres adulto <br>";
    break;
  default:
    echo "Eres mayor de edad <br>";
    break;
}
//Match

$resulEdad = match (true) {
  $edad < 18 => "Eres menor de edad",
  $edad >= 18 && $edad <= 65 => "Eres adulto",
  default => "Eres mayor de edad"
};
echo "<br>" . $resulEdad;

?>
<?php
/*Crea una función que reciba un array de palabras y una palabra a buscar, y retorne true si la palabra se encuentra en el array, false en caso contrario.*/

function buscaPalabra($palabras, $palabraBuscar)
{
  foreach ($palabras as $palabra) {
    // Convertimos las palabras a minúsculas 
    $palabra = strtolower($palabra);
    $palabraBuscar = strtolower($palabraBuscar);
    if ($palabra == $palabraBuscar) {
      return true;
    }
  }
  return false;
}
echo "<br>";
$arrayPalabras = ["hola", "mundo", "adios", "php"];
$palabra = "PHP";
if (buscaPalabra($arrayPalabras, $palabra)) {
  echo "La palabra " . strtoupper($palabra) . " se encuentra  en el array";
} else {
  echo "La palabra " . strtoupper($palabra) . " no se encuentra en el array";
}
?>

<?php
echo "<br>";

// Crea una función que reciba un array de números y retorne un nuevo array con los números al cuadrado.

function cuadrado($arrayNum)
{
  $arrayCuadrado = [];
  foreach ($arrayNum as $num) {
    $arrayCuadrado[] = $num ** 2;
  }
  return $arrayCuadrado;
}

$arrayNum = [1, 2, 3, 4, 5];
print_r($arrayNum);
echo "<br>";
print_r(cuadrado($arrayNum));



?>

<?php
/*
   Vamos a crear un programa para calcular el total que una persona debe pagar en una tienda de neumáticos. La tienda vende tres tipos de neumáticos (invierno, verano y todo el año) y aplica varias reglas de precios y descuentos.
  Reglas de Precios y Descuentos:

Precios Base:
Neumáticos de invierno: 85€ cada uno.
Neumáticos de verano: 80€ cada uno.
Neumáticos para todo el año: 75€ cada uno.

Descuento por Cantidad: Si se compran 5 o más neumáticos de cualquier tipo, el precio de cada neumático se reduce en 10€.

Promoción Especial: Por cada 4 neumáticos comprados (de cualquier tipo), el comprador recibe 1 neumático gratis. Este descuento se aplica antes de cualquier otro descuento adicional.

Descuento Adicional: Si el total de la compra supera los 300€, se aplica un descuento adicional del 5% sobre el total.

Aplicación de Impuestos: Todos los precios están sujetos a un IVA del 21%.

Costos de Envío:
Si se compran menos de 5 neumáticos, se añade un costo de envío de 10€.
Si se compran entre 5 y 10 neumáticos, se añade un costo de envío de 5€.
Si se compran más de 10 neumáticos, el envío es gratuito.


Requisitos:
Debes implementar una función calcularTotal($cantidad, $tipoRueda) que reciba como parámetros el número de neumáticos y el tipo de neumático, y devuelva el total a pagar.
La función debe aplicar todas las reglas de precios, descuentos, impuestos y costos de envío de manera correcta.
No puedes utilizar funciones propias del lenguaje que realicen los cálculos de manera automática, debes implementar la lógica manualmente.
 */
?>




<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>"; ?>

<!-- 4. Vamos a crear un programa para calcular el total que una persona debe pagar en una tienda de neumáticos. La tienda vende tres tipos de neumáticos (invierno, verano y todo el año) y aplica varias reglas de precios y descuentos.


Reglas de Precios y Descuentos:

Precios Base:
Neumáticos de invierno: 85€ cada uno.
Neumáticos de verano: 80€ cada uno.
Neumáticos para todo el año: 75€ cada uno.

Descuento por Cantidad: Si se compran 5 o más neumáticos de cualquier tipo, el precio de cada neumático se reduce en 10€.

Promoción Especial: Por cada 4 neumáticos comprados (de cualquier tipo), el comprador recibe 1 neumático gratis. Este descuento se aplica antes de cualquier otro descuento adicional.

Descuento Adicional: Si el total de la compra supera los 300€, se aplica un descuento adicional del 5% sobre el total.

Aplicación de Impuestos: Todos los precios están sujetos a un IVA del 21%.

Costos de Envío:
Si se compran menos de 5 neumáticos, se añade un costo de envío de 10€.
Si se compran entre 5 y 10 neumáticos, se añade un costo de envío de 5€.
Si se compran más de 10 neumáticos, el envío es gratuito.


Requisitos:
Debes implementar una función calcularTotal($cantidad, $tipoRueda) que reciba como parámetros el número de neumáticos y el tipo de neumático, y devuelva el total a pagar.
La función debe aplicar todas las reglas de precios, descuentos, impuestos y costos de envío de manera correcta.
No puedes utilizar funciones propias del lenguaje que realicen los cálculos de manera automática, debes implementar la lógica manualmente. -->

<?php

function calcularTotal($cantidad, $tipoNeumatico) {

    // Definir precios base
    $precioNeumaticoInvierno = 85;
    $precioNeumaticoVerano = 80;
    $precioNeumaticoTodoAnio = 75;

    // Calcular precio inicial sin descuentos
    $precioTotal = $cantidad * ($tipoNeumatico == "invierno" ? $precioNeumaticoInvierno : ($tipoNeumatico == "verano" ? $precioNeumaticoVerano : $precioNeumaticoTodoAnio));

    // Aplicar descuento por cantidad
    if ($cantidad >= 5) {
        $precioTotal -= $cantidad * 10;
    }

    // Aplicar promoción especial (neumático gratis)
    $cantidadNeumaticosGratuitos = floor($cantidad / 4);
    $precioTotal -= $cantidadNeumaticosGratuitos * ($tipoNeumatico == "invierno" ? $precioNeumaticoInvierno : ($tipoNeumatico == "verano" ? $precioNeumaticoVerano : $precioNeumaticoTodoAnio));

    // Calcular costo de envío
    $costoEnvio = 0;
    if ($cantidad < 5) {
        $costoEnvio = 10;
    } else if ($cantidad <= 10) {
        $costoEnvio = 5;
    }

    // Aplicar descuento adicional (si corresponde)
    if ($precioTotal > 300) {
        $precioTotal *= 0.95;
    }

    // Aplicar IVA
    $precioTotal *= 1.21;

    // Sumar costo de envío al total
    $precioTotal += $costoEnvio;

    return $precioTotal;
}

// Ejemplo de uso
$cantidadNeumaticosInvierno = 3;
$cantidadNeumaticosVerano = 2;
$cantidadNeumaticosTodoAnio = 4;

$totalInvierno = calcularTotal($cantidadNeumaticosInvierno, "invierno");
$totalVerano = calcularTotal($cantidadNeumaticosVerano, "verano");
$totalTodoAnio = calcularTotal($cantidadNeumaticosTodoAnio, "todoAnio");

echo "Total neumáticos invierno: $" . $totalInvierno. "<br>";
echo "Total neumáticos verano: $" . $totalVerano. "<br>";
echo "Total neumáticos todo el año: $" . $totalTodoAnio. "<br>";











//! ejercicio 4 
    
function calcularPrecio ($cantidad,$tipoderueda){

$llantaInvierno = 85;
$llantaVerano = 80;
$llantasTodoAnio = 75;
//OPERADORES TERNARIOS PARA COOMPARAR EL TIPO DE NEUMATICO Y MULTIPLICAR SU PRECIO SEGUN LA CANTIDAD 

$total = $cantidad * ($tipoderueda == "invierno" ? $llantaInvierno : ($tipoderueda== "verano" ? $llantaVerano :$llantasTodoAnio ));

if ($cantidad >= 5){
    $total -= $cantidad *10;
} 

//llantas gratis, si la condicion se cumple con operadores ternarios vamos a comparar el tipo de rueda (floor) te convierte a numeros enteros cercanos.
 $llantasGratis = floor($cantidad / 4);
 $total -= $llantasGratis * ($tipoderueda == "invierno"? $llantaInvierno : ($tipoderueda == "verano" ?  $llantaVerano :$llantasTodoAnio ));

 //Si se compran menos de 5 neumáticos, el costo de envío es de 10 euros.
// Si se compran entre 5 y 10 neumáticos, el costo de envío es de 5 euros.
// Si el precio total del pedido supera los 300 euros, se aplica un descuento del 5% al precio total.

$costoDeEnvio = 0; 
if ($cantidad <5) {
  $costoDeEnvio = 10;

} elseif ($cantidad <= 10){
    $costoDeEnvio = 5;
}
if ($total >= 300){
    $total *= 0.95;
}
//del total entre descuentos al final agregamos el iva 
 $total *= 1.21 ;

 //sumar del total el coste del envio que aqui nada es gratis
$total += $costoDeEnvio ;
//le pedimos con retur que me regrese los valores del $total
 return $total;
}
// cantidad de neumaticos vendidos 

$cantidadllantasTodoAnio = 10;
$cantidadllantaInvierno = 4;
$cantidadllantaVerano = 5;

//llamamos a la funcion por que si no no hace nada 

$TotalNeumaticostodoanio = calcularPrecio($cantidadllantasTodoAnio,"todoanio");
$TotalNeumaticosInvierno = calcularPrecio($cantidadllantaInvierno,"invierno");
$TotalNeumaticosVerano = calcularPrecio($cantidadllantaVerano,"verano");

echo "El total de tus llantas de invierno es de  ". $TotalNeumaticosInvierno. "<br>";
echo "El total de tus llantas de vernao es de  ". $TotalNeumaticosVerano. "<br>";
echo "El total de tus llantas para todo el año es de   " . $TotalNeumaticostodoanio. "<br>"; 

echo $llantasGratis;



//!ejercicio 4 propfesor

function calculareltotal ($cantidad, $tipoderueda){
if ($tipoderueda == "invierno"){
    $precio = 85;}
    elseif ($tipoderueda == "verano"){
        $precio = 80;
    } else if ($tipoderueda == "todoelanio"){
        $precio = 75;
 } else {
    "tipo de rueda no valido ";
    return;
 }
  $totalprecio = $precio * $cantidad;
 //descuento por cantidad 
 if ($cantidad >= 5){
    $precio = $precio = 10;
 } //descuento por promocion especial, llantas gratis 
 if ($cantidad >= 4) {
    $ruedasgratis = ($cantidad - ($cantidad % 4)) / 4;
    $totalprecio -= $ruedasgratis * $precio;

}

//decuento adicional 
if ($totalprecio >=300) {
    $totalprecio = $totalprecio *0.95;
}
//agregar iva 
$totalprecio *= 1.21;
//costos de envio 

if ($cantidad < 5) {
    $totalprecio = $totalprecio + 10;
} elseif ($cantidad >= 10)
{$totalprecio = $totalprecio + 5;}
return $totalprecio;
}
$cantidad = 5;
$tipoderueda = "anual"; 

calculareltotal ($cantidad, $tipoderueda);
echo "<h3> Por  $cantidad ruedas de tipo $tipoderueda, el precio es: ". calculareltotal ($cantidad, $tipoderueda) . $totalprecio. "€  </h3>";
?>


