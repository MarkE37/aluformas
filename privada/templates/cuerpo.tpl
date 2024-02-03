<!DOCTYPE html>
 	<head>
      		<link rel="stylesheet" type="text/css" href="{$direc_css}">
  	</head>
 <body>
 		<form action="claves/" method="post" target="cuerpo">
 		{if $nick == ""}
 			<table width="15%" align="center" border="1">
 				<tr>
 					<th align="center" colspan="2">Ingresar al Sistema</th>
 				</tr>
 				<tr>
 					<td><b>Login:</b></td>
 					<td><input type="text" name="nick" size="11" value="" class="limpiar"></td>
 				</tr>
 				<tr>
 					<td><b>Clave:</b></td>
 					<td><input type="password" name="password" size="11" value=""></td>
 				</tr>
 				<tr>
 					<td colspan="2" align="center">
 					<input type="submit" name="accion" value="Ingresar" size="5">
 					</td>
 				</tr>
 			</table>
 			{/if}
 		</form>
 	</body>
 </html>