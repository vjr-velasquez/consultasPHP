<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para poder actualizar los municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <?php
    $codigo = $_POST['hidden_codigoa'];
    // Buscar el codigo en la base de datos en la tabla de municipios
    require_once('conexion.php');
    $sql = "SELECT * FROM municipios WHERE cod_muni = '$codigo'";
    // Ejecutar la consulta en la base de datos
    $ejecutar = mysqli_query($conexion, $sql);
    // Convertir los datos a un array en PHP
    $datos = mysqli_fetch_assoc($ejecutar);
    ?>
    <div class="container">
        <h1>Modificar Municipio</h1>
        <br>
        <!-- crud_municipios.php es el archivo que realizara los procesos 
        crud en la bd -->
        <form action="crud_municipios.php" method="post">
            <label for="txt_codigo" class="form-label">Código</label>
            <input type="number" name="txt_codigo" id="txt_codigo" 
                value="<?php echo $codigo;?>" class="form-control" readonly>
            <label class="form-label" for="txt_nombre">Nombre</label>
            <input type="text" name="txt_nombre" id="txt_nombre" 
                value="<?php echo $datos['nombre_municipio'];?>" class="form-control">
            <label for="txt_region" class="form-label">Region</label>
            <input type="text" name="txt_region" id="txt_region" 
                value="<?= $datos['cod_depto']?>" class="form-control">
            <button type="submit" name="actualizar" class="form-control btn btn-primary">
                Actualizar Municipio
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>