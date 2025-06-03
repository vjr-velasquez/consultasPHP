<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos de Guatemala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo Departamento
    </button>
    <br>
    <a href="../index.php">Regresar</a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Departamento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="crud_departamentos.php" method="post">
                        <label for="txt_codigo" class="form-label">Codigo de departamento: </label>
                        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                        <br>
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <br>
                        <label for="txt_descripcion" class="form-label">Codigo de Region</label>
                        <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control">
                        <br>
                        <button type="submit" class="form-control btn btn-primary">Agregar un nuevo departamento</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once('conexion.php');
    $sql = "SELECT * FROM departamentos";
    $ejecutar = mysqli_query($conexion, $sql);
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Codigo_departamento</th>
                <th>Nombre</th>
                <th>Codigo de Region</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
             <?php while ($fila = mysqli_fetch_array($ejecutar)) { ?>
                <tr>
                    <td><?php echo $fila['cod_depto']; ?></td>
                    <td><?php echo $fila['nombre_depto']; ?></td>
                    <td><?php echo $fila['cod_region']; ?></td>
                    <td class="d-flex flex-row">
                        <form action="crud_departamentos.php" method="post" class="me-2">
                            <input type="hidden" name="hidden_codigo" value="<?php echo $fila['cod_depto']; ?>">
                            <button type="submit" name="btn_eliminar" class="btn btn-outline-danger">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </form>
                        <form action="actualizar_departamentos.php" method="post">
                            <input type="hidden" name="hidden_codigoa" value="<?php echo $fila['cod_depto']; ?>">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>