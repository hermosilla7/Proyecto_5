<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <title>Gaya Design - Presentation Cycle</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Pragma" content="no-cache" />
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/presentationCycle.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>

    <!-- Scripts -->
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <script type='text/javascript' src='js/jquery.cycle.all.min.js'></script>
    <script type='text/javascript' src='js/presentationCycle.js'></script>
</head>
<body>
<div class="container">
    <h1>Presentation Cycle Example</h1>
        <div id="actividades">
            <div class="contact-form">
<div id="presentation_container" class="pc_container">
    <?php

    if (isset($_SESSION['mail'])) {
        ?>

        <?php
    } else {
        $_SESSION['error'] = "No te saltes pasos!";
        header("location: index.php");
    }
    $actividadesArray = [];
    while ($actividad = mysqli_fetch_array($result_actividades)) {
      
              echo "<div class='pc_item'><div class='desc'><b style='margin-top: 15px;'>Nombre:</b> ";
        echo utf8_encode($actividad['nombre']);
        echo "<br/>";
        echo "<b>Descripción:</b> ";
        echo utf8_encode($actividad['descripcion']);
        echo "<br/></div>";
$fichero = "img/$actividad[img]";
        if (file_exists($fichero) && (($actividad['img']) != '')) {
            echo "<img src='$fichero' width='100%' heigth='200px' >";
        } else {
            echo "<img src ='img/no_disponible.jpg'width='90%' heigth='90%'/>";
        }
        ?>

        <?php echo "<br/><br/></div>";
    }

    ?>
         <script type="text/javascript">
            presentationCycle.init();
        </script>
            </div>

            </div>
        </div>
    </div>
    <div class="container">
    
       
        
       
</body>
</html>