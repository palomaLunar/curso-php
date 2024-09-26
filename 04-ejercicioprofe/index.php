<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora php</title>
</head>

<body>
    <?php
    require "calculadora.php";
    if (isset($_POST['btnCalcular'])) {
        //si valor esta vacio (empty) me regresas un cero y si no...
        $valor1 = empty($_POST['valor1']) ? 0 : $_POST['valor1'];
        $valor2 = empty($_POST['valor2']) ? 0 : $_POST['valor2'];
        $operacion = $_POST['operacion'];
        if ($operacion == "vacio") {
            echo "debes seleccionar una operacion";
            return;
        };
        // /llamamos a las funciones que estan creadas en calculadora.php

        switch ($operacion) {
            case 'suma':
                $resultado = suma($valor1 , $valor2);
                break;
            case 'resta':
                $resultado = resta($valor1 , $valor2);
                break;
            case 'multiplica':
                $resultado = multiplica($valor1 , $valor2);
                break;
            case 'divide':
                $resultado = divide($valor1 , $valor2);
                break;
            default:
                return "Operación no válida";
        }
        echo  "el valor de $valor1 $operacion $valor2 es igual a $resultado";
    }
    ?>
    <main class="container">
        <h1>calculadora</h1>
        <form action="" method="post">
            <label for="dato 1">
                <span> valor 1</span>
                <input type="number" name="valor1" id="dato1">
            </label> <br><br>
            <label for="dato 2">
                <span> valor 2</span>
                <input type="number" name="valor2" id="dato2">
            </label> <br> <br>
            <label for="operacion">
                <select name="operacion" id="operacion">
                    <option value="vacio">selecciona operacion</option>
                    <option value="suma"> suma </option>
                    <option value="resta"> resta </option>
                    <option value="multiplica"> multiplicacion </option>
                    <option value="divide"> dividir </option>
                </select></label>
            <br><br>
            <input type="submit" value="calcular" name="btnCalcular">
        </form>
    </main>

</body>

</html>