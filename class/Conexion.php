<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login';
$Conexion = new mysqli($host, $user, $password, $db);
error_reporting(0);

if ($Conexion->connect_errno) {
    echo "No se pudo establecer la conexion";
}
