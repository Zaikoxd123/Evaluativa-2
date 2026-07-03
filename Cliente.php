<h1> Tabla 1: Cliente</h1>
<?php
//consulta a SQL
 include 'conn.php';
 $sqlConsultapruebas = $conn->query("SELECT * FROM cliente");
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
        echo "ID: " . $fila["id"] . "- Usuario: " . $fila["usuario"] . "- Password: " . $fila["password"];
        ?>
        <table border="1">
            <th>
                <td>ID</td>
                <td>Usuario</td>
                <td>contraseña</td>
            </th>
            <tr>
                <td></td>
                <td><?php echo $fila["id"]; ?></td>
                <td><?php echo $fila["usuario"]; ?></td>
                <td><?php echo $fila["password"]; ?></td>
            </tr>
        </table>
        <?php
    }
}
?>