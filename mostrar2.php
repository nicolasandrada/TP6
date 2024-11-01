<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mostrar2.css">
</head>
<body>

<!-- muestra los datos de la base -->

<?php 
include "conexion.php";

$sql = "SELECT * FROM usuario";
$resultado = $con->query($sql);

//comprobar si hay resultado
if ( $resultado->num_rows > 0 ) {

    while ($row = mysqli_fetch_array($resultado)) {
        echo "  <div>
                    <img width='100' src='fotos/$row[foto]'>
                    <p> $row[id] </p>
                    <h1> $row[nombre] </h1>
                    <h2> $row[fecha_nacimiento]</h2>
                </div>";
        }

}
 else {
    echo "0 resultados";
}

//cerrar conexion

$con->close();
?>


</body>
</html>