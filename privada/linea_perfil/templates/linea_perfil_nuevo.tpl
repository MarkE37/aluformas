<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_linea_perfil.js"></script>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR linea_perfil</h2>
			<form action="linea_perfil_nuevo1.php" method="post" name="formu">
				<table>
	                    <tr>
	                        <th align="left">linea(*)</th>
	                        <th>:</th>
	                        <td><input type="text" name="linea" onkeyup="this.value=this.value.toUpperCase()"></td>
	                    </tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='linea_perfil.php';">
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
