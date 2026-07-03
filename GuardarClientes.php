
<?php
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  echo "Usuario: " . $usuario . "<br>";
  echo "password: " . $password . "<br>";

   // Incorporamos conexion a base de datos
  include 'conn.php';

  //preparar la consulta SQL con marcadores
 $stmt = $conn->prepare("INSERT INTO cliente (usuario, password) VALUES (? , ?)");

 //comprobacion de la consulta
 if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}

 //Vincular los parametros de la consulta preparada
 $stmt->bind_param("ss", $usuario, $password);

 //ejecuta la consola:
 if ($stmt->execute()) {
    echo "Nuevo registro creado con el ID: " . $stmt->insert_id . "<br>";
    echo "Datos agregados del cliente han sido agregados con exito";
 } else {
    echo "Error al ejecutar la consulta " . $stmt->error;
}
?>