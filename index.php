<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos - Ejemplo de php</title>
</head>
<body>
    <form action="acciones/procesar.php" method="GET">
        <label for="txt_nombre">Nombre</label>
        <input type="text" name="txt_nombre" id="txt_nombre">
        <br>
        <label for="txt_edad">Edad</label>
        <input type="number" name="txt_edad" id="txt_edad">
        <br>
        <label for="txt_sueldo">Sueldo</label>
        <input type="decimal" name="txt_sueldo" id="txt_sueldo">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>