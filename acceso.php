<html>
	<head>
		<title>
			Acceso a BD MySQL
		</title>
	</head>
	<body>
		<h1>Acceso a BD MySQL</h1>
		<form name="frmalta" action="alta.php" method="post">
			<table>
				<tr>
					<td colspan="2">Nuevo Invitado:</td>
				<tr>
				<tr>
					
				
					<td>Nombre:</td>
					<td><input type="text" name="txtnombre" required="required"></td>
				</tr>
				
				<td>Sexo:</td>
					<td><input type="text" name="txtsexo" required="required"></td>
				</tr>
				<tr>
					<td>Mensaje:</td>
					<td><input type="text" name="txtmensaje" required="required"></td>
				</tr>

			</table>
		</form>
		<?php
			$conexion = mysqli_connect("localhost","root","","diadelamujer");
			$consulta = mysqli_query($conexion,"select * from invitado;");
			if (mysqli_num_rows($consulta) > 0) {
				echo "<table border=1>";
				echo "<tr><th colspan=4>Libro</th></tr>";
				echo "<tr><th>sexo</th><th>Nombre</th><th>Mensaje</th><th>Opciones</th></tr>";
				while ($registro = mysqli_fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$registro["sexo"]."</td>";
					echo "<td>".$registro["nombre"]."</td>";
					echo "<td>".$registro["mensaje"]."</td>";
		?>
					
		<?php
				}
			}
		?>
	</body>
</html>
