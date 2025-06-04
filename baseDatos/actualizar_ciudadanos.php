<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $codigo = $_POST['hidden_codigoa'];
    // Buscar el codigo en la base de datos en la tabla de ciudadanos
    require_once('conexion.php');
    $sql = "SELECT * FROM ciudadanos WHERE cod_ciudadano = '$codigo'";
    // Ejecutar la consulta en la base de datos
    $ejecutar = mysqli_query($conexion, $sql);
    // Convertir los datos a un array en PHP
    $datos = mysqli_fetch_assoc($ejecutar);
    ?>
    <div class="container">
        <h1>Modificar Ciudadano</h1>
        <!-- crud_ciudadanos.php es el archivo que realizara los procesos 
        crud en la bd -->
        <form action="crud_ciudadanos.php" method="post">
            <label for="txt_codigo" class="form-label">Código</label>
            <input type="number" name="txt_codigo" id="txt_codigo" 
                value="<?php echo $codigo;?>" class="form-control" readonly>
            <label class="form-label" for="txt_nombre">Nombre</label>
            <input type="text" name="txt_nombre" id="txt_nombre" 
                value="<?php echo $datos['nombre'];?>" class="form-control">
            <label for="txt_apellido" class="form-label">Apellido</label>
            <input type="text" name="txt_apellido" id="txt_apellido" 
                value="<?= $datos['apellido']?>" class="form-control">
            <button type="submit" name="actualizar" class="form-control btn btn-primary">
                Actualizar Ciudadano
            </button>
        </form>
</body>
</html>