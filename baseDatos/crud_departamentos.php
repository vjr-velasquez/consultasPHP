<?php
require_once('conexion.php');
// Proceso para actualizar departamento
if (isset($_POST['actualizar'])) {
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $descripcion = $_POST["txt_descripcion"];
    $sql = "UPDATE departamentos SET nombre_depto='$nombre', descripcion='$descripcion' WHERE cod_depto=$codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vistas_departamentos.php");
    exit;
}
// Agregar nuevo departamento
if (isset($_POST["txt_codigo"]) && isset($_POST["txt_nombre"]) && isset($_POST["txt_descripcion"])) {
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $descripcion = $_POST["txt_descripcion"];

    // Verificar si el código ya existe
    $sql_check = "SELECT * FROM departamentos WHERE cod_depto = $codigo";
    $result = mysqli_query($conexion, $sql_check);

    if (mysqli_num_rows($result) > 0) {
        // Ya existe, puedes mostrar un mensaje o redirigir con error
        header("Location: vistas_departamentos.php?error=duplicado");
        exit;
    } else {
        $sql = "INSERT INTO departamentos (cod_depto, nombre_depto, descripcion) VALUES ($codigo, '$nombre', '$descripcion')";
        $ejecutar = mysqli_query($conexion, $sql);
        header("Location: vistas_departamentos.php");
        exit;
    }
}
// Eliminar departamento
if (isset($_POST['btn_eliminar']) && isset($_POST['hidden_codigo'])) {
    $codigo = $_POST['hidden_codigo'];
    $sql = "DELETE FROM departamentos WHERE cod_depto = $codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vistas_departamentos.php");
    exit;
}
?>