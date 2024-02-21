<?php

$host = 'localhost';
$usuario = 'sebastian';
$password = '9876';
$base_datos = 'SMED_DB.sql';

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}