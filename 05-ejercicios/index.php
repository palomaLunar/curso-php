<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="container">
        
    <form action="comprobarDatos.php"  method="POST" enctype="multipart/form-data">
        <!-- //si trabajamos con archhivos es importaante agregar enctype. -->
      <label for="nombre"> Nombre:
        <input type="text" name="nombre" id="nombre" required>
      </label>
      <br><br>
      <label for="nombreUsuario">Nombre De Usuario:
        <input type="text" name="nombreUsuario" id="nombreUsuario" required>
      </label>
      <br><br>
     <label for="password">Contraseña:
        <input type="password" name="password" id="password" required>
      </label>
      <br><br>
      <label for="password">Confirme Contraseña:
        <input type="password" name="password2" id="passwordcon" required>
      </label>
      <br><br>
      <label for="email">Email:
        <input type="email" name="email" id="email" required>
      </label>
      <br><br>
      
      
        <section class="hobbies" multiple>
        <label for="hobbies">Pasatiempos (hobbies)</label>
        <br>
        <label for="hobbie_videojuegos"> videojuegos
            
          <input type="checkbox" value="videojuegos" name="hobbie[]" id="hobbie_videojuegos">
        </label><br>
        <label for="hobbie_pintar"> pintar
          <input type="checkbox" value="pintar" name="hobbie[]" id="hobbie_pintar">
        </label><br>
        <label for="hobbie_mesa"> juegos de mesa
          <input type="checkbox" value="mesa" name="hobbie[]" id="hobbie_mesa">
        </label><br>
        <label for="hobbie_bailar"> bailar
          <input type="checkbox" value="bailar" name="hobbie[]" id="hobbie_bailar">
        </label><br>
        <label for="hobbie_cantar"> cantar
          <input type="checkbox" value="cantar" name="hobbie[]" id="hobbie_cantar">
        </label><br>
      </section>
      </label>
      <br>
      <label for="adjuntar">
        Adjuntar archivo:
        <input type="file" name="adjuntar" id="adjuntar" accept=".pdf, .jpeg, .png">
      </label>
      <br>
      <!-- Botón enviar formulario -->
      <input type="submit" value="Enviar formulario" name="btn-enviar">
    </form>
    </main>
</body>
</html>