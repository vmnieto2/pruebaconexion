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


    <table>
        <tr>
            <td><label>Nombre: </label></td>
            <td><input type="text" name="txtNombre" id="txtNombre"></td>
        </tr>

        <tr>
            <td><label>Apellido: </label></td>
            <td><input type="text" name="txtApellido" id="txtApellido"></td>
        </tr>

        <tr>
            <td><label>Dirección: </label></td>
            <td><input type="text" name="txtDireccion" id="txtDireccion"></td>
        </tr>

        <tr>
            <td><label>Teléfono: </label></td>
            <td><input type="text" name="txtTelefono" id="txtTelefono"></td>
        </tr>
    </table>

        <button type="submit" name="btnRegistrar" id="btnRegistrar">Registrar</button>

    </form>

    <?php

    if (isset($_POST["btnRegistrar"])) {
        
        $nom = $_POST['txtNombre'];
        $ape = $_POST['txtApellido'];
        $dir = $_POST['txtDireccion'];
        $tel = $_POST['txtTelefono'];

        $sql = "INSERT INTO usuarios (usuario_nombre, usuario_apellido, usuario_direccion, usuario_telefono) VALUES ('$nom', '$ape', '$dir', '$tel') ";
        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
            echo "Registro exitoso.";
            
        }else{
            echo "Error.";
        }
        mysqli_close($conexion);
    }

    ?>

    <br><br>
    <a href="index.php">Regresar</a>

</body>
</html>


