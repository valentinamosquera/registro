<?php
require 'conexion.php';
// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $nombreusuario = $_POST["username"];
    $contraseña = ($_POST["contraseña"]);

      // Verificar si el usuario ya existe en la base de datos
      $sql = "SELECT * FROM sesion WHERE nombreusuario = '$nombreusuario' AND contraseña = '$contraseña'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          echo "El nombre de usuario ya está registrado. Por favor, elige otro nombre de usuario.";
      } else {
          // Insertar el nuevo usuario en la base de datos
          $sql = "INSERT INTO sesion(nombre, email, nombreusuario, contraseña) VALUES ('$nombre','$email', '$nombreusuario', '$contraseña')";
          if ($conn->query($sql) === TRUE) {
              // Redireccionar a la página de inicio de sesión
              header("Location: Indexlogin.php");
              exit();
          } else {
              echo "Error al registrar el usuario: " . $conn->error;
          }
      }
  }
  
  $conn->close();
  ?>