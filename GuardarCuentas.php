<?php
  $numero_cuenta = $_POST['numero_cuenta'];
  $tipo_cuenta = $_POST['tipo_cuenta'];
  $saldo = $_POST['saldo'];
  $id_cliente = $_POST['id_cliente'];

  echo "Numero de la cuenta: " . $numero_cuenta. "<br>";
  echo "Tipo de cuenta: " . $tipo_cuenta . "<br>";
  echo "saldo: " . $saldo . "<br>";
   echo "ID del cliente: " . $id_cliente . "<br>";

   // Incorporamos conexion a base de datos
  include 'conn.php';

  //preparar la consulta SQL con marcadores
 $stmt = $conn->prepare("INSERT INTO cuenta (numero_cuenta, tipo_cuenta, saldo, id_cliente) VALUES (?, ?, ?, ?)");

 //comprobacion de la consulta
 if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}

 //Vincular los parametros de la consulta preparada
 $stmt->bind_param("ssdi", $numero_cuenta, $tipo_cuenta, $saldo, $id_cliente);

 //ejecuta la consola:
 if ($stmt->execute()) {
    echo "Nuevo registro creado correctamente con el ID: " . $stmt->insert_id . "<br>";
    echo "Datos agregados del cliente han sido agregados con exito";
 } else {
    echo "Error al ejecutar la consulta " . $stmt->error;
}
?>