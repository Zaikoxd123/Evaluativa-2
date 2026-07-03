<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Ingrese su usuario y contraseña para poder ingresar</h3>
     <form action="ControlLogin.php" method="post">
         <input type="text" name="usuario" id="usuario" required placeholder="Username">
         <input type="password" name="password" id="password" required placeholder="Password">
         <button type="submit">login</button>
     </form>
</body>
</html>