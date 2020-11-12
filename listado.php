<?php
include_once "conexion.php";
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
        $sql = "SELECT * FROM usuarios WHERE usuario_estado = 1";
        $resultado = mysqli_query($conexion, $sql);
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
            <?php foreach ($resultado as $res) { ?>
            <tr>
                <td><?php echo $res["usuario_id"] ?></td>
                <td><?php echo $res["usuario_nombre"] ?></td>
                <td><?php echo $res["usuario_apellido"] ?></td>
                <td><?php echo $res["usuario_direccion"] ?></td>
                <td><?php echo $res["usuario_telefono"] ?></td>
                <td> <a href="editar.php?id=<?php echo $res["usuario_id"] ?>">Editar</a> </td>
                <td> <a href="eliminar.php?id=<?php echo $res["usuario_id"] ?>">Eliminar</a> </td>
            </tr>
            <?php } mysqli_close($conexion); ?>
            </tbody>
        </table>
    </div>
</body>
</html>