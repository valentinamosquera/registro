<?php
require 'conexion.php';
// Procesar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreusuario = $_POST["nombreusuario"];
    $contraseña = $_POST["password"];


    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT * FROM sesion WHERE nombreusuario= '$nombreusuario' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION["nombreusuario"] = $nombreusuario;
        header("Location:bienvenido.php");
        exit();
    } else {
        // Credenciales incorrectas
       echo $error_message = "Usuario o contraseña incorrectos";
    }
}

$conn->close();
?>
