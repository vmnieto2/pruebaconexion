<?php
require_once "conexion.php";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "pruebaconexion";
    $conexion = mysqli_connect($host, $user, $pass, $database) or die("Error de conexión");

        $sql = mysqli_query($conexion, "SELECT * FROM usuarios");

    ?>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($sql as $res) { ?>
            <tr>
                <td><?php echo $res["usuario_id"] ?></td>
                <td><?php echo $res["usuario_nombre"] ?></td>
                <td><?php echo $res["usuario_apellido"] ?></td>
                <td><?php echo $res["usuario_direccion"] ?></td>
                <td><?php echo $res["usuario_telefono"] ?></td>
                <td> <a href="editar.php?id=<?php echo $res["usuario_id"] ?>">Editar</a> </td>
                <td> <a href="eliminar.php?id=<?php echo $res["usuario_id"] ?>">Eliminar</a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>