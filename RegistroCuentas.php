<?php
 include 'conn.php';
 // ejecutar el codigo
 $ConsultaCuenta = $conn->query("SELECT *FROM cuenta");

 //Verificacion si la consulta es correcta
 if($ConsultaCuenta === false) {
    die("error en la consulta: " . $conn->error);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
     <form action="GuardarCuentas.php" method="post">
         <input type="text" name="numero_cuenta" id="numero_cuenta" required placeholder="Numero de cuenta">
         <input type="text" name="tipo_cuenta" id="tipo_cuenta" required placeholder="Tipo de cuenta">
         <input type="text" name="saldo" id="saldo" required placeholder="Saldo de la cuenta">

        <select name="id_cliente" id="id_cliente" required>
        <?php
        // consulta correcta a la tabla cliente
        $ConsultaClientes = $conn->query("SELECT id, usuario FROM cliente");

        if($ConsultaClientes->num_rows === 0){
           echo "<option>No se encontraron clientes</option>";
       } else {
          while ($row = $ConsultaClientes->fetch_assoc()) {
      echo "<option value='" . $row['id'] . "'>" . $row['id'] . " - " . $row['usuario'] . "</option>";
   }
}
?>
</select>
 <button type="submit">Guardar</button>
     </form>
</body>
</html>