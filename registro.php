<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar.php" method="post" enctype="multipart/form-data">
        nombre
        <input type="text" name="nombre" id=""> <br>
        contraseña
        <input type="password" name="contrasena" id=""> <br>
        fecha
        <input type="date" name="fecha" id=""> <br>
        foto
        <input type="file" name="foto" id=""> <br>

        <button type="submit"> REGISTRADO </button>
    </form>
</body>
</html>