<?php
    include 'conect.php';
    session_start();
    if (isset($_POST['enviar'])) {
        if (empty($_POST['cedu']) || empty($_POST['pass'])) {
            ?>
                <script leguage="javascript">window.alert('campos de obligatorios')</script>
            <?php
        }else{
            $sql="SELECT * FROM usuario WHERE cedula_u=:cedula AND password_u=:passwordd";
            $resultado=$base->prepare($sql);
            $resultado->execute(array("cedula"=>$_POST['cedu'],"passwordd"=>$_POST['pass']));
            while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC) ) {
                $_SESSION['nombre']=$consulta['nombre_u'];
            }
            $verificar = $resultado -> rowCount();
            if ($verificar > 0) {
                header("location:perfil.php");
            }else{
                ?>
                <script leguage="javascript">window.alert("datos erroneos :(")</script>
                <?php
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio Seccion</title>
</head>
<body>
    
</body>
</html>
<form method="POST" action="">
    <table>
        <tr>
            <td colspan="2">Inicio de Seccion</td>
        </tr>
        <tr>
            <td>Cedula</td>
            <td><input type="text" name="cedu"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td><input type="submit" name="enviar" value="Enviar"></td>
        </tr>
    </table>
</form>