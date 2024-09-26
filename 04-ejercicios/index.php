<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

   <form action="calculadora.php" method='post'>
        <input type='number' name='num1' placeholder='Primer número'>
        <select name='operacion'>
            <option value='+'>+</option>
            <option value='-'>-</option>
            <option value='*'>*</option>
            <option value='/'>/</option>
        </select>
        <input type='number' name='num2' placeholder='Segundo número'>
        <input type='submit' value='Calcular'>
    </form>
</body>