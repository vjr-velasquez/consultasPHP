<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niveles Academicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo Nivel Academico
    </button>
    <br>
    <a href="../index.php">Regresar</a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nivel Academico</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="crud_academicos.php" method="post">
                        <label for="txt_codigo" class="form-label">Codigo de nivel academico: </label>
                        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                        <br>
                        <label for="txt_nombre" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                        <br>
                        <label for="txt_descripcion" class="form-label">Descripcion del nivel Academico</label>
                        <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control">
                        <br>
                        <button type="submit" class="form-control btn btn-primary">Agregar un nuevo nivel</button>
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
    $sql = "SELECT * FROM nivelesacademicos";
    $ejecutar = mysqli_query($conexion, $sql);
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Codigo_nivel_Academico</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fila = mysqli_fetch_array($ejecutar)) { ?>
                <tr>
                    <td><?php echo $fila['cod_nivel_acad']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['descripcion']; ?></td>
                    <td class="d-flex flex-row">
                        <form action="crud_academicos.php" method="post" class="me-2">
                            <input type="hidden" name="hidden_codigo" value="<?php echo $fila['cod_nivel_acad']; ?>">
                            <button type="submit" name="btn_eliminar" class="btn btn-outline-danger">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </form>
                        <form action="actualizar_academicos.php" method="post">
                            <input type="hidden" name="hidden_codigoa" value="<?php echo $fila['cod_nivel_acad']; ?>">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>