<?php
require_once('conexion.php');

// Proceso para actualizar nivel académico
if (isset($_POST['actualizar'])) {
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $descripcion = $_POST["txt_descripcion"];
    $sql = "UPDATE nivelesacademicos SET nombre='$nombre', descripcion='$descripcion' WHERE cod_nivel_acad=$codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vista_academicos.php");
    exit;
}

// Agregar nuevo nivel académico
if (isset($_POST["txt_codigo"]) && isset($_POST["txt_nombre"]) && isset($_POST["txt_descripcion"])) {
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $descripcion = $_POST["txt_descripcion"];

    // Verificar si el código ya existe
    $sql_check = "SELECT * FROM nivelesacademicos WHERE cod_nivel_acad = $codigo";
    $result = mysqli_query($conexion, $sql_check);

    if (mysqli_num_rows($result) > 0) {
        // Ya existe, puedes mostrar un mensaje o redirigir con error
        header("Location: vista_academicos.php?error=duplicado");
        exit;
    } else {
        $sql = "INSERT INTO nivelesacademicos (cod_nivel_acad, nombre, descripcion) VALUES ($codigo, '$nombre', '$descripcion')";
        $ejecutar = mysqli_query($conexion, $sql);
        header("Location: vista_academicos.php");
        exit;
    }
}

// Eliminar nivel académico
if (isset($_POST['btn_eliminar']) && isset($_POST['hidden_codigo'])) {
    $codigo = $_POST['hidden_codigo'];
    $sql = "DELETE FROM nivelesacademicos WHERE cod_nivel_acad = $codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vista_academicos.php");
    exit;
}

?>