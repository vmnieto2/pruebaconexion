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
    <form name="frmRegistro" method="post" action="">
        <label>Nombre: </label>
        <input type="text" name="txtNombre" id="txtNombre"><br>

        <label>Apellido: </label>
        <input type="text" name="txtApellido" id="txtApellido"><br>

        <label>Dirección: </label>
        <input type="text" name="txtDireccion" id="txtDireccion"><br>

        <label>Teléfono: </label>
        <input type="text" name="txtTelefono" id="txtTelefono"><br>

        <button type="submit" name="btnRegistrar" id="btnRegistrar">Registrar</button>

    </form>

    <?php
    $nom = $_REQUEST['txtNombre'];
    $ape = $_REQUEST['txtApellido'];
    $dir = $_REQUEST['txtDireccion'];
    $tel = $_REQUEST['txtTelefono'];

    $sql = "INSERT INTO usuarios  FROM usuarios(nombre, apellido, direccion, telefono) VALUES ($nom, $ape, $dir, $tel) ";
    $resultado = getDatos($conexion, $sql);

    mysqli_close($conexion);

    echo "Registro exitoso.";


    ?>

</body>
</html>


