<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_empleado.js"></script>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR EMLEADO</h2>
			<form action="empleado_nuevo1.php" method="post" name="formu">
				<table align="center">
                    <tr>
                        <th><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" placeholder="nombres (*)"></th>
                    </tr>
					<tr>
						<th><input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()" placeholder="cedula de identidad (*)"></th>
					</tr>
					<tr>
						<th><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9" placeholder="telefono (*)"></th>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='empleados.php';">
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
