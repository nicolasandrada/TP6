<?php
//INCLUYE CONEXION
include "conexion.php";

//RECIBIR DATOS DEL FORMULARIO
$nombre = $_REQUEST["nombre"];
$contrasena = password_hash( $_REQUEST["contrasena"] , PASSWORD_BCRYPT);
$fecha = $_REQUEST["fecha"];

//CREAMOS LA CONSULTA
$SQL = "INSERT INTO usuario 
        (nombre, contrasena, fecha_nacimiento)
        VALUES
        ('$nombre', '$contrasena', '$fecha')";

//EJECUTAMOS 
$con->query($SQL);