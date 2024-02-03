<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_vidrio.js"></script>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR VIDRIO</h2>
			<form action="vidrio_nuevo1.php" method="post" name="formu">
				<table align="center">
					<tr>
                              <th align="right">tipo de vidrio (*)</th><th align="top">:</th>
                              <td>
                                   <select name="tipo_vidrio">
                                        {foreach item=r from=$tipo_vidrios}
                                        <option value="{$r.id_tipo_vidrio}">{$r.nombre}</option>
                                        {/foreach}
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <th align="right">Color (*)</th><th align="top">:</th>
                              <td>
                                   <select name="color">
                                        {foreach item=r from=$colores}
                                        <option value="{$r.id_color}">{$r.nombre}</option>
                                        {/foreach}
                                   </select>
                              </td>
                         </tr>
	                    <tr>
	                        <td colspan="3" align="center"><input type="text" name="ancho" placeholder="ancho (*)"></td>
	                    </tr>
					<tr>
						<td colspan="3" align="center"><input type="text" name="alto" placeholder="alto (*)"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='vidrios.php';">
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
