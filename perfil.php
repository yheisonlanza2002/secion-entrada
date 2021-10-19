<?php
    include 'conect.php';
    session_start();
    if (isset($_SESSION['nombre'])) {
        $nombre=$_SESSION['nombre'];

    }else{
        $nombre="";
    }
    if ($nombre=="") {
        echo "<script>window.location='index.php'</script>";
    }else{
        echo "usuario : $nombre";
    }

    try {
        $sql="SELECT * FROM usuario";
        $resultado = $base->prepare($sql);
        $resultado->execute(array());
        while ($consulta = $resultado->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <table>
        <tr>
            <td>Cedula</td>
            <td><?php echo  $consulta['cedula_u'];?></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td></td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td></td>
        </tr>
        <tr>
            <td>Direccion</td>
            <td></td>
        </tr>
        <tr>
            <td>Email</td>
            <td></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td></td>
        </tr>
    </table>
          <?php
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cerrar</title>
</head>
<body>
    <a href="cerrar.php">cerrar seccion</a>
    
    
</body>
</html>