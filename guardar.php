<?php
//INCLUYE CONEXION
include "conexion.php";

//RECIBIR DATOS DEL FORMULARIO
$nombre = $_REQUEST["nombre"];
$contrasena = password_hash( $_REQUEST["contrasena"] , PASSWORD_BCRYPT);
$fecha = $_REQUEST["fecha"];

$foto = $_FILES['foto'];

//CREAMOS LA CONSULTA
$SQL = "INSERT INTO usuario 
        (nombre, contrasena, fecha_nacimiento, foto)
        VALUES
        ('$nombre', '$contrasena', '$fecha', '$foto[name]')";

//EJECUTAMOS 
$con->query($SQL);

move_uploaded_file( $foto['tmp_name'] ,'fotos/'.$foto['name']);

echo "<pre>";
print_r($foto);