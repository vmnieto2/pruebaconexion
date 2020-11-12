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

        $id = $_GET["id"];
        $sql = "SELECT * FROM usuarios WHERE usuario_id = $id";
        $resultado = mysqli_query($conexion, $sql);
        foreach ($resultado as $res) {
        
    ?>
    <form name="frmActualizar" method="post" action="">
        <label>Nombre: </label>
        <input type="text" name="txtNombre" id="txtNombre" value="<?php echo $res["usuario_nombre"]; ?>"><br>

        <label>Apellido: </label>
        <input type="text" name="txtApellido" id="txtApellido" value="<?php echo $res["usuario_apellido"]; ?>"><br>

        <label>Dirección: </label>
        <input type="text" name="txtDireccion" id="txtDireccion" value="<?php echo $res["usuario_direccion"]; ?>"><br>

        <label>Teléfono: </label>
        <input type="text" name="txtTelefono" id="txtTelefono" value="<?php echo $res["usuario_telefono"]; ?>"><br>

        <?php } ?>

        <button type="submit" name="btnActualizar" id="btnActualizar">Actualizar</button>
        <br>
        <br>

    </form>

    <?php

    if (isset($_POST["btnActualizar"])) {
        
        $nom = $_POST['txtNombre'];
        $ape = $_POST['txtApellido'];
        $dir = $_POST['txtDireccion'];
        $tel = $_POST['txtTelefono'];

        $sql = "UPDATE usuarios SET usuario_nombre = '$nom', usuario_apellido = '$ape', usuario_direccion = '$dir', usuario_telefono = '$tel' WHERE usuario_id = $id";
        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
            echo "Actualizacion exitosa.";
            header("Refresh: 1");
        }else{
            echo "Error.";
        }
        mysqli_close($conexion);
    }

    ?>

    <a href="listado.php">Regresar</a>


</body>
</html>


