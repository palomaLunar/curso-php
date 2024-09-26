// vamos a crear con la funcion de ayer de las llantas, pedir por medio de un formulario el tipo de rueda y la cantidad.


<form action="" method="post">
        <label for="tipoderueda"> Tipo de llanta:
            <input type="text" name="tipoderueda" id="tipoderueda">
        </label>
        <br>
        <label for="cantidad">cantidad de llantas a comprar:
            <input type="numer" name="cantidad" id="cantidad">
        </label>
        <input type="submit" value="Enviar">

    </form>

    
    <?php 
    $tipoderueda = $_POST ['tipoderueda'];
    $cantidad = $_POST ['cantidad'];
    
   
    
    function calcularPrecio ($cantidad,$tipoderueda){

$llantaInvierno = 85;
$llantaVerano = 80;
$llantasTodoAnio = 75;
//OPERADORES TERNARIOS PARA COOMPARAR EL TIPO DE NEUMATICO Y MULTIPLICAR SU PRECIO SEGUN LA CANTIDAD 

//!falta revisar bien el comparardor de tipo de rueda 
$tipoderueda = $tipoderueda == "invierno" ? $llantaInvierno : ($tipoderueda == "verano" ? $llantaVerano :$llantasTodoAnio );

$total = $cantidad * $tipoderueda;
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

echo calcularPrecio ($cantidad, $tipoderueda);