<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    /*$c_contraseña = $_POST['c_contraseña'];*/

    $sql = "INSERT INTO registro (nombre, apellido, email, contraseña/*, c_contraseña*/) 
            VALUES ('$nombre', '$apellido', '$email', '$contraseña'/*, '$c_contraseña'*/)";

    if ($conexion->query($sql) === TRUE) {
        echo '
            <script>
            alert("Registro Exitoso");
            window.location = "login.html";
        </script>

        ';
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
} else {
    echo "Error";
}

$conexion->close();