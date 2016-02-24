<?php
error_reporting(0);
include 'conexion.proc.php';
include "header.php";
$consulta_usuarios = "SELECT * FROM usuario";
$result_usuarios = mysqli_query($con, $consulta_usuarios);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administración de usuarios</title>
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
        <script>
                function confirmDel(usuario) {
                    var r = confirm("¿Quieres eliminar usuario?");
                    if (r == true) {
                        location.href = "contactos_baja.proc.php?id="+usuario;
                    } else {
                        //no hará nada
                    }
                }
        </script>
    </head>
    <body>
        <div id="usuarios">
            <div class="prin-img" style="margin-bottom: 15px;">

    <?php
    $usuariosArray = [];
    while ($usuario = mysqli_fetch_array($result_usuarios)) {
        echo "<b style='margin-top: 15px;'>Nombre:</b> ";
        echo utf8_encode($usuario['nombre']);
        echo "<br/>";
        echo "<b>Apellidos:</b> ";
        echo utf8_encode($usuario['apellidos']);
        echo "<br/>";
        echo "<b>Correo:</b> ";
        echo utf8_encode($usuario['correo']);
        ?>
        <a href="usuarios_modificar.php?id=<?php echo $usuario['id']; ?>">Editar contacto</a>
    <a href="#" onclick="confirmDel(<?php echo $usuario['id']; ?>)">Eliminar contacto</a>
    <?php echo "<br/><br/>";
    }
    ?>
                <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
            </div>
        </div>
    </body>
</html>