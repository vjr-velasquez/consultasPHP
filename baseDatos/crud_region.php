<?php
    //vamos a utilizar la conexion a la base de datos
    require_once("conexion.php");
    echo "archivo con procesos crud para las regiones";
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $descripcion = $_POST["txt_descripcion"];


    echo "Datos recibidos de la region:";
    echo "<br>Codigo: " . $codigo;
    echo "<br>Nombre: " . $nombre;
    echo "<br>Descripcion: " . $descripcion;

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO regiones(cod_region, nombre, descripcion) VALUES (" . $codigo . ", '" . $nombre . "', '" . $descripcion . "')";
    //ejecutar con la concexion
    $ejecutar = mysqli_query($conexion, $sql);
    echo "<br> Valor de ejecutar: " . $ejecutar;
?>