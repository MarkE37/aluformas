<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div class="normal">
			<br><br><br><br>
			<table width="100%" border="0">
				<tr>
					<td width="33%">
						<table border="0">
							<tr>
							</tr>
						</table>
					</td>
					<td align="center" width="33%">
						<h2>Propietarios</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="propietarios_nuevo.php">
							<a href="javascript:document.formNuevo.submit();">
							Nuevo>>>>
							</a>
						</form>
					</td>
				</tr>
			</table>
		</div>
		<div class="listado">
		<center>
			<table>
				<thead>
					<tr>
						<th>NRO</th><th>nombre</th><th>ci</th><th>telefono</th>
						<th align="center"><img src="../../img/modificar.gif" height="30px"></th><th align="center"><img src="../../img/borrar.gif" height="30px"></th>
					</tr>
				</thead>
				{assign var="b" value="1"}
				{foreach item=r from=$propietarios}
				<tr>
                    <td>{$b}</td>
					<td>{$r.nombre}</td>
					<td>{$r.ci}</td>
					<td>{$r.telefono}</td>
                    <td>
						<form name="formModif{$r.id_propietario}" method="post" action="propietarios_modificar.php">
						<input type="hidden" name="id_propietario" value="{$r.id_propietario}">
						<a href="javascript:document.formModif{$r.id_propietario}.submit();" title="Modificar propietario Sistema">
							Modificar>>>
						</a>
						</form>
					</td>
					<td>
						<form name="formElimi{$r.id_propietario}" method="post" action="propietarios_eliminar.php">
						<input type="hidden" name="id_propietario" value="{$r.id_propietario}">
						<a href="javascript:document.formElimi{$r.id_propietario}.submit();" title="Eliminar propietario Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar al propietario..?"));'>
							Eliminar>>>
						</a>
						</form>
					</td>
					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
			</table>
			</div>
		</center>
	</body>
</html>
