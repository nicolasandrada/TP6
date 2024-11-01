<?php 
include "conexion.php";

$sql = "SELECT * FROM usuario";
$resultado = $con->query($sql);

//comprobar si hay resultado
if ( $resultado->num_rows > 0 ) {

    echo "<table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Foto</th>
        </tr>";
    while ($row = mysqli_fetch_array($resultado)) {
        echo "  <tr>
                    <td> $row[id] </td>
                    <td> $row[nombre] </td>
                    <td> $row[fecha_nacimiento]</th>
                    <td>
                        <img width='100' src='fotos/$row[foto]'>
                    </td>
                </tr>";
        }

    echo "</table>";
}
 else {
    echo "0 resultados";
}

//cerrar conexion

$con->close();
?>