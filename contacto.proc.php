<?php
	include_once 'conexion.proc.php';
	error_reporting(0);
?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<?php
			$message = 'Sugerencia registrada';
			echo "<SCRIPT type='text/javascript'> //not showing me this
		        alert('$message');
		        window.location.replace(\"index.php\");
		    </SCRIPT>";
		?>
	</body>
</html>
