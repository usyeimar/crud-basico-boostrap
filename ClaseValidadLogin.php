<?php

if (isset($_POST['btnlogin' ])) {
    $_usuario = $_POST['usuario'];
    $_password = $_POST['password'];
    session_start();
    ob_start();
    $_SESSION['usuario'] = $_usuario;
    include_once('./class/Conexion.php');
    $query = "SELECT * FROM login WHERE usuario = '$_usuario' AND pass = '$_password' ";
    $resultado = mysqli_query($Conexion,$query);
    $filas = mysqli_num_rows($resultado);
    if ($filas) {
        header("Location:./app.php");
    }else {
        echo"<script>
        alert'Datos incorrectos';
        </script>";
        header("Location:./index.php");
    }





}
