<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <header>
    <h1>Mi nombre de Empresa</h1>
    <nav>
      <a href="">Inicio</a>
      <a href="">Nosotros</a>
      <a href="">Servicios</a>
    </nav>
  </header>
  <hr>
  <main class="container">
    <!-- Crear un formulario con los siguientes campos:
      nombre
      apellido
      correo electrónico
      nombre usuario
      contraseña
      lista con 3 ciudades 
      checkbox horario: mañana, tarde, noche.
      añadir archivo
       -->
<!-- //cuando trabajamos con archivos es necesario añadir enctype="multipart/form-data" -->
    <form action="verDatos.php" method="POST" enctype="multipart/form-data">
      <label for="nombre"> Nombre:
        <input type="text" name="nombre" id="nombre">
      </label>
      <br>
      <label for="apellido">Apellido:
        <input type="text" name="apellido" id="apellido">
      </label>
      <br>
      <label for="email">Email:
        <input type="email" name="email" id="email">
      </label>
      <br>
      <label for="nombreUsuario">Nombre usuario:
        <input type="text" name="nombreUsuario" id="nombreUsuario">
      </label>
      <br>
      <label for="password">Contraseña:
        <input type="password" name="password" id="password">
      </label>
      <br>
      <label for="ciudades">Ciudad:
        <select name="ciudad" id="ciudades">
          <option value="valladolid">Valladolid</option>
          <option value="sevilla">Sevilla</option>
          <option value="malaga">Malaga</option>
        </select>
      </label>
      <br>
      <label for="ciudades">paises:
        <!-- // multiple es para elegir varias opciones, (solo en un select) 
        //name= "paises[]"  mientras que los corchetes [] es para almacenar los datos dentro de un array  -->
        <select name="paises[]" id="paises" multiple>
          <option value="españa">españa</option>
          <option value="francia">francia</option>
          <option value="argentina">argentina</option>
        </select>
      </label>
      <!-- //name= "horario[]"  mientras que los corchetes [] es para almacenar los datos dentro de un array  -->
      <section class="check_horario">
        <label>Horario:</label>
        <label for="horario_mañana">Mañana
          <input type="checkbox" value="mañana" name="horario[]" id="horario_mañana">
        </label>
        <label for="horario_tarde">Tarde
          <input type="checkbox" value="tarde" name="horario[]" id="horario_tarde">
        </label>
        <label for="horario_noche">Noche
          <input type="checkbox" value="noche" name="horario[]" id="horario_noche">
        </label>
      </section>
      <br>
      <label for="adjuntar">
        Adjuntar archivo:
        <input type="file" name="adjuntar" id="adjuntar" accept=".pdf, .jpeg, .png">
      </label>
      <br>
      <!-- Botón enviar formulario -->
      <input type="submit" value="Enviar formulario">
    </form>
  </main>

</body>

</html>