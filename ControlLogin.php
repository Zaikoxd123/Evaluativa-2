<h1> Bienvenido al Banco de las aguilas</h1>
<?php
 require_once 'conn.php';
 if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT );

    //prepara la consulta sql con marcadores
    $stmt = $conn->prepare("SELECT * FROM cliente WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if($resultado->num_rows > 0) {
        $fila= $resultado->fetch_assoc();

      if($_POST['password'] === $fila['password']) {
    echo "tu Inicio de sesion ha sido exitoso... Bienvenido :)";
    include 'Cliente.php';
    include 'Cuentas.php';
 ?>

 <h3> Ingresar nuevo usuario de cliente:</h3>
 <?php
include 'RegistroClientes.php';
?>
<h3> Ingresar nuevos datos de la cuenta:</h3>
 <?php
include 'RegistroCuentas.php';
?>
<?php
} else {
    echo "Contraseña incorrecta";
}

    } else {
        echo "usuario no encontrado";
    }
 } else {
    echo "Acceso no autorizado";
    }
    $stmt->close();
    $conn->close();

    

