<?php
date_default_timezone_set('America/Guayaquil');
$db_host = "localhost";
$db_user = "admin";
$db_pass = "admin";
$db_name = "legacy";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    // Registrar el error en un archivo en lugar de mostrarlo.
    error_log("Failed to connect to the database: " . mysqli_connect_error());
    echo "error" . mysqli_connect_error();
    echo "<script>alert('Error al conectar con la base de datos.');</script>";
} else {
    echo "<script>alert('Conexion Exitosa');</script>";
}
?>