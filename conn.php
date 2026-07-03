<?php   
//configuracion de la base de datos
$host = "localhost"; // nombre del servidor
$db_user = "Mikuxd";    // nombre de usuario
$db_password = "P3nt4g0n_0m"; //contraseña
$database = "banco"; //Nombre de la base de datos

//crear conexion 
$conn = new mysqli ($host, $db_user, $db_password, $database);

//verificar conexion
if ($conn->connect_error) {
    die("connection falied: " . $conn->connect_error);
}

//establecer conexion
$conn->set_charset("utf8mb4");
//echo "La conexion a la base de datos de la biblioteca ha sido establecida de forma exitosa :)";

?>