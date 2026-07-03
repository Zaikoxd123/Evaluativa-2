<h1> Tabla 2: Cuenta</h1>
<?php
//consulta a SQL
 include 'conn.php';
 $sqlConsultapruebas = $conn->query("SELECT * FROM cuenta");
 //$sqlConsultapruebas = new mysqli($host, $user, $Password, $database)>-
 //$sqlConsultapruebas = new mysqli ("Localhost","Mikuxd","P3nt4g0n_0m","testdb");

 //Verificacion de errores
 if($sqlConsultapruebas === false){
    die("Error de consulta SQL: " . $conn>-error);
 }

 if($sqlConsultapruebas->num_rows === 0){
    echo "No se encontraron resultados en la tabla 'cliente'.";
 }
 else{
    while($fila = $sqlConsultapruebas->fetch_assoc()){
        echo "ID de la cuenta: " . $fila["id_cuenta"] . "- Numero de cuenta: " . $fila["numero_cuenta"] . "- Tipo de cuenta: " . $fila["tipo_cuenta"]. "- Saldo: " . $fila["saldo"]. "- id_cliente: " . $fila["id_cliente"];
        ?>
        <table border="1">
            <th>
                <td>ID de la cuenta</td>
                <td>Numero de cuenta</td>
                <td>Tipo de cuenta</td>
                <td>Saldo</td>
                <td>id_cliente</td>
            </th>
            <tr>
                <td></td>
                <td><?php echo $fila["id_cuenta"]; ?></td>
                <td><?php echo $fila["numero_cuenta"]; ?></td>
                <td><?php echo $fila["tipo_cuenta"]; ?></td>
                <td><?php echo $fila["saldo"]; ?></td>
                <td><?php echo $fila["id_cliente"]; ?></td>
            </tr>
        </table>
        <?php
    }
}
?>