<?php
 include 'conn.php';
 // ejecutar el codigo
 $ConsultaEstatus = $conn->query("SELECT *FROM cliente");

 //Verificacion si la consulta es correcta
 if($ConsultaEstatus === false) {
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
     <form action="GuardarClientes.php" method="post">
         <input type="text" name="usuario" id="usuario" required placeholder="Username">
         <input type="password" name="password" id="password" required placeholder="Password">
         <button type="submit">Guardar</button>
     </form>
</body>
</html>