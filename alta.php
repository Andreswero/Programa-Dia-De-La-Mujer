<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<?php
			
			
			$nombre = $_GET["txtnombre"];
			$sexo = $_GET["txtsexo"];
			$mensaje = $_GET["txtmensaje"];

			$conexion = mysqli_connect("localhost","root","","diadelamujer");
			$consulta = mysqli_query($conexion,"insert into invitado values (\"$nombre\",\"$sexo\",\"$mensaje\");");
			echo "Invitado Guardado";

			$consulta = mysqli_query($conexion,"select * from invitado;");
			if (mysqli_num_rows($consulta) > 0) {
				echo "<table border=1>";
				echo "<tr><th colspan=4>Libro</th></tr>";
				echo "<tr><th>nombre</th><th>sexo</th><th>mensaje</th></tr>";

				while ($registro = mysqli_fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$registro["nombre"]."</td>";
					echo "<td>".$registro["sexo"]."</td>";
					
					if($registro["sexo"] == "M"){
						echo "<td> <strong style = 'color: blue;'>".$registro["mensaje"]."</strong></td>";
					}else if($registro["sexo"] == "F"){
						echo "<td> <strong style = 'color: pink;'>".$registro["mensaje"]."</strong></td>";
					}
					
				}
			}
		?>
					
		<br>
		<a href="Entrada.php">Regresar</a>
	</body>
</html>