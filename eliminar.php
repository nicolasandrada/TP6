<?php
    include "conexion.php";

    // Verifica si se ha recibido el nombre
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];

        // Elimina el registro con el nombre proporcionado
        $SQL = "DELETE FROM Usuarios WHERE nombre = ?";
        $stmt = $con->prepare($SQL);
        $stmt->bind_param("s", $nombre);

        if ($stmt->execute()) {
            echo "Registro eliminado correctamente.";
        } else {
            echo "Error al eliminar el registro: " . $con->error;
        }

        $stmt->close();
    } else {
        echo "No se proporcionó ningún nombre.";
    }

    $con->close();

    // Redirecciona de vuelta a registro.php
    header("Location: registro.php");
    exit;
?>
