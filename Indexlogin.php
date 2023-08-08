<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estiloprueba.css">
</head>
<body>
<div class="container">
    <img src="img/logo.jpeg" alt="" class="img">
    <form method="post" action="Login.php">
      <h2>Iniciar sesión</h2>
      <div >
        <label for="nombreusuario">Usuario:</label>
        <input type="text" name="nombreusuario" id="nombreusuario" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
      </div>
     
  <hr>
      <div>
      <a href="index2.php">¿Perdiste tu contraseña?</a><br>
      <a href="index.php">¿No tienes Cuenta? Registrate</a>
      <hr>
      <a href="Indexlogin.php">
      <input type="submit" value="Iniciar sesión">
              
  </form>
  </div>
  </div>
</body>
</html>
