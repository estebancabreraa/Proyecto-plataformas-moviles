<html>
	<head>
		<title>Curriculum vitae</title>
	</head>
	<body>
		<?php
			$integrante = $_REQUEST['boton'];
			if ($integrante == "Esteban Cabrera Arevalo"){
				echo "<center>";
				echo "<h1>Esteban Cabrera Arevalo</h1></br>";
				echo "<img src="esteban.jpg"/>";
				echo "<h3>Edad: 19.</h3>";
				echo "<h3>Fecha de nacimiento: 07-08-1998.</h3>";
				echo "<h3>Lugar de nacimiento: Guatemala, Guatemala,</h3>";
				echo "<h3>Domicilio: 14 AVE A 3-60 Z15.</h3>";
				echo "<h3>Telefono: 5710-2722.</h3>";
				echo "<h3>Correo: cab17781@uvg.edu.gt.</h3>";
				echo "<h3>Lenguajes: Ingl&eacutes, espanol, C/C++, C#, Java, Python, Pascal, MySQL, Php, Javascript, JQuery. </h3>";
				echo "</center>";
			}	
		?>
	</body>
</html>