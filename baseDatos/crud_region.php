<?php
require_once("conexion.php");
echo "archivo con procesos crud para las regiones<br>";

// Eliminar región
if (isset($_POST['btn_eliminar']) && isset($_POST['hidden_codigo'])) {
    $codigo = $_POST['hidden_codigo'];
    $sql = "DELETE FROM regiones WHERE cod_region = $codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vista_regiones.php");
    exit;
}

// Actualizar región
if (isset($_POST['actualizar'])) {
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $descripcion = $_POST["txt_descripcion"];
    $sql = "UPDATE regiones SET nombre='$nombre', descripcion='$descripcion' WHERE cod_region=$codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vista_regiones.php");
    exit;
}

// Agregar nueva región
if (isset($_POST["txt_codigo"]) && isset($_POST["txt_nombre"]) && isset($_POST["txt_descripcion"])) {
    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $descripcion = $_POST["txt_descripcion"];
    // Verificar si el código ya existe
    $sql_check = "SELECT * FROM regiones WHERE cod_region = $codigo";
    $result = mysqli_query($conexion, $sql_check);

    if (mysqli_num_rows($result) > 0) {
        echo "Error: Ya existe una región con el código $codigo.";
    } else {
        $sql = "INSERT INTO regiones(cod_region, nombre, descripcion) VALUES ($codigo, '$nombre', '$descripcion')";
        $ejecutar = mysqli_query($conexion, $sql);
        header("Location: vista_regiones.php");
    }
    exit;
}

echo "No se recibió ninguna acción válida.";
?>