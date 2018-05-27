<html>
	<head>
		<title>Curriculum vitae</title>
	</head>
	<body>
		<?php
			
			$servername = "localhost";
			$username = "root";
			$password = "313b6b73434";
			$integrante = $_REQUEST['boton'];
			$conn = @mysql_connect('localhost', 'root', '313b6b73434');
			if (!$conn) {
				echo "Error.";
			} else {
				if ($integrante == "Esteban Cabrera Arevalo"){
					$sql = "SELECT FROM integrantes WHERE nombre='".$integrante."';";
				}
			

				mysql_select_db("curriculums", $conn);
				$resultado = mysql_query($sql,$conn);

				echo "hola";
				mysql_close($conn);
				
			}
		?>
	</body>
</html>