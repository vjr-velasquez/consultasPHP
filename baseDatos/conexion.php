<?php
    //definir las variables
    $servidor = "localhost";
    $usuario = "root";
    $password = ""; // no tiene contraseña en estos momentos
    $baseDatos = "fs2025_ciudadanos";

    // conexion con mysqli
    $conexion = mysqli_connect($servidor , $usuario, $password, $baseDatos);

    if ($conexion) {
        echo "Conectado a la base de datos";
    } else {
        echo "Error de conexion a la base de datos";
    }


?>