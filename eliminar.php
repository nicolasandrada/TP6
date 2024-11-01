<?php
    include "conexion.php";

    // Verifica si se ha recibido el nombre
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        // Elimina el registro con el nombre proporcionado
        $SQL = "DELETE FROM usuario WHERE id = ?";
        $stmt = $con->prepare($SQL);
        $stmt->bind_param("i", $id);

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

    // Redirecciona de vuelta a eliminar.php
    header("Location: mostrar1.php");
    exit;
?>
