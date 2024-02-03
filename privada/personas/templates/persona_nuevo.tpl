<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_persona.js"></script>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR PERSONA SISTEMA</h2>
			<form action="persona_nuevo1.php" method="post" name="formu">
				<table>
					<tr>
						<th><input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()" placeholder="carnet de identidad">(*)</th>
					</tr>
					<tr>
						<th><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" placeholder="nombre">(*)</th>
					</tr>
					<tr>
						<th><input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()" placeholder="apellido paterno"></th>
					</tr>
					<tr>
						<th><input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()" placeholder="aperllido materno"></th>
					</tr>
					<tr>
						<th><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" placeholder="direccion">(*)</th>
					</tr>
					<tr>
						<th><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9" placeholder="telefono">(*)</th>
					</tr>
					<tr>
						<th align="center">Genero(*)</th>
					</tr>
					<tr>
						<th><input type="radio" name="genero" value="F">Femenino<input type="radio" name="genero" value="M">Masculino</th>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='personas.php';">
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
