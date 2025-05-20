<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once("conexion.php");
    $sql = "SELECT * FROM regiones";
    // Ejecutar la consulta en la base de datos
    $ejecutar = mysqli_query($conexion, $sql);

    // Recorrer los datos y mostrarlos
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Region</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
<?php 
    while($fila = mysqli_fetch_assoc($ejecutar)){
?>
        <tr>
            <td><?php echo $fila['cod_region'];?></td>
            <td><?php echo $fila['nombre'];?></td>
            <td><?php echo $fila['descripcion'];?></td>
        </tr>
<?php 
    }
?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>




