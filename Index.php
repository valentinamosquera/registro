<!DOCTYPE html>
<html>
<head>
  <title>Registro de usuario</title>
  <link rel="stylesheet" type="text/css" href="estiloprueba.css">
</head>
<body>
  <div class="container">
  <img src ="Img/logo.jpeg" alt="" class="img">
    <form method="post" action="Registro.php">
      <h2>Registro de usuario</h2>
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        </div>
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" required>
    </div>
    <input type="submit" value="Registrarse">
  </form>
</div>
</div>            
</body>
</html>
