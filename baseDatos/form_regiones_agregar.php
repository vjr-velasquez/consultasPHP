<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para poder agregar regiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
        <h2>
            Agregar una nueva Region
        </h2>
        <!-- insertar_region.php = es el archivo que realizara los procesos crud en la db-->
        <form action="crud_region.php" method="post">
            <label for ="txt_codigo" class="form-label" >Codigo de la region:</label>
            <input type="number" name = "txt_codigo"  id = "txt_codigo" class = "form-control">
            <br>
            <label for="txt_nombre"  class="form-control">Nombre de la region</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
            <br>
            <label for="txt_descripcion" class="form-control">Descripcion de la region</label>
            <input type="text" name="txt_descripcion"  id="txt_descripcion" class="form-control">
            <br>
            <button type="submit" class="form-control btn btn-primary">Agregar Region</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>