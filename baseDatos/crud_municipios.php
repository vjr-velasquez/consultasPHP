<?php
require_once('conexion.php');

// Proceso para actualizar un municipio
if(isset($_POST['actualizar'])){
    $codigo = $_POST['txt_codigo'];
    $nombre = $_POST['txt_nombre'];
    $region = $_POST['txt_region'];
    $sql = "UPDATE municipios SET nombre_municipio='$nombre', cod_depto='$region' WHERE cod_muni=$codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vistas_municipios.php");
    exit;
}

// Agregar un nuevo municipio
if(isset($_POST['txt_codigo']) && isset($_POST['txt_nombre']) && isset($_POST['txt_region'])){
    $codigo = $_POST['txt_codigo'];
    $nombre = $_POST['txt_nombre'];
    $region = $_POST['txt_region'];

    // Validar que $region sea numérico
    if (!is_numeric($region)) {
        header("Location: vistas_municipios.php?error=region_invalida");
        exit;
    }

    // Verificar si el código ya existe
    $sql_check = "SELECT * FROM municipios WHERE cod_muni = $codigo";
    $result = mysqli_query($conexion, $sql_check);

    if(mysqli_num_rows($result) > 0){
        header("Location: vistas_municipios.php?error=duplicado");
        exit;
    } else {
        // Verificar si el departamento existe
        $sql_depto = "SELECT * FROM departamentos WHERE cod_depto = $region";
        $res_depto = mysqli_query($conexion, $sql_depto);

        if(mysqli_num_rows($res_depto) == 0){
            header("Location: vistas_municipios.php?error=depto_no_existe");
            exit;
        }

        $sql = "INSERT INTO municipios (cod_muni, nombre_municipio, cod_depto) VALUES ($codigo, '$nombre', '$region')";
        $ejecutar = mysqli_query($conexion, $sql);
        header("Location: vistas_municipios.php");
        exit;
    }
}

// Eliminar un municipio
if(isset($_POST['btn_eliminar'])){
    $codigo = $_POST['hidden_codigo'];
    $sql = "DELETE FROM municipios WHERE cod_muni = $codigo";
    $ejecutar = mysqli_query($conexion, $sql);
    header("Location: vistas_municipios.php");
    exit;
}

?>