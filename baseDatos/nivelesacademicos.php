<?php
    require_once("conexion.php");
    $sql = "SELECT * FROM nivelesacademicos";
    // Ejecutamos la consulta en la base de datos
    $ejecutar = mysqli_query($conexion, $sql);
?>
<table border="1">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nivel Academico</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
<?php 
    while($fila = mysqli_fetch_assoc($ejecutar)){
?>
        <tr>
            <td><?php echo $fila['cod_nivel_acad'];?></td>
            <td><?php echo $fila['nombre'];?></td>
            <td><?php echo $fila['descripcion'];?></td>
        </tr>
<?php 
    }
?>
    </tbody>
</table>