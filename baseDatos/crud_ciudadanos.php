<?php
require_once('conexion.php');
// Proceso para actualizar ciudadano
if (isset($_POST['actualizar'])) {
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $apellido = $_POST["txt_apellido"];
    $sql = "UPDATE ciudadanos SET nombre='$nombre', apellido='$apellido' WHERE dpi=$codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vista_ciudadanos.php");
    exit;
}
// Agregar nuevo ciudadano
if (isset($_POST["txt_codigo"]) && isset($_POST["txt_nombre"]) && isset($_POST["txt_apellido"])) {
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $apellido = $_POST["txt_apellido"];

    // Verificar si el código ya existe
    $sql_check = "SELECT * FROM ciudadanos WHERE dpi = $codigo";
    $result = mysqli_query($conexion, $sql_check);

    if (mysqli_num_rows($result) > 0) {
        // Ya existe, puedes mostrar un mensaje o redirigir con error
        header("Location: vista_ciudadanos.php?error=duplicado");
        exit;
    } else {
        $sql = "INSERT INTO ciudadanos (dpi, nombre, apellido) VALUES ($codigo, '$nombre', '$apellido')";
        $ejecutar = mysqli_query($conexion, $sql);
        header("Location: vista_ciudadanos.php");
        exit;
    }
}
// Eliminar ciudadano
if (isset($_POST['btn_eliminar']) && isset($_POST['hidden_codigo'])) {
    $codigo = $_POST['hidden_codigo'];
    $sql = "DELETE FROM ciudadanos WHERE dpi = $codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vista_ciudadanos.php");
    exit;
}
?>