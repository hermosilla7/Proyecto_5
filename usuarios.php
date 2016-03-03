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
            while ($usuario = mysqli_fetch_array($result_usuarios)) {
                if($usuario['id'] != $_SESSION['id']){
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
                    <a href="usuarios_modificar_admin.php?id=<?php echo $usuario['id']; ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                    <a href="usuarios_baja_admin.proc.php?id=<?php echo $usuario['id']; ?>"><i class="fa fa-user-times fa-2x"></i></a>
        <?php 
                    echo "<br/></div><br/>";
                }
            }
        ?>
            <a href="#" class="crunchify-top"><img src ="img/btt.png" style="float: right;" width="50px" height="50px"></a>
        </div>
    </div>
<?php
    include 'footer.php';
?>