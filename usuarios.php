<?php
    include 'header.php';
    $consulta_usuarios = "SELECT * FROM usuario where activo = 1";
    $result_usuarios = mysqli_query($con, $consulta_usuarios);
?>
<div class="titluse">
        <h1>Usuarios</h1>
    </div>
    <div id="usuarios" class="usuarios">
        <div class="prin-img" style="margin-bottom: 15px;">

        <?php
            $usuariosArray = [];
            while ($usuario = mysqli_fetch_array($result_usuarios)) {
                echo "<div class='users'><b style='margin-top: 15px;'>Nombre:</b> ";
                echo utf8_encode($usuario['nombre']);
                echo "<br/>";
                echo "<b>Apellidos:</b> ";
                echo utf8_encode($usuario['apellidos']);
                echo "<br/>";
                echo "<b>Correo:</b> ";
                echo utf8_encode($usuario['correo']);
                 echo "<br/>";
        ?>
            <a href="usuarios_modificar_admin.php?id=<?php echo $usuario['id']; ?>">Editar usuario</a>
            <a href="usuarios_baja_admin.proc.php?id=<?php echo $usuario['id']; ?>">Eliminar usuario</a>
        <?php 
                echo "<br/></div><br/>";
            }
        ?>
            <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
        </div>
    </div>
<?php
    include 'footer.php';
?>