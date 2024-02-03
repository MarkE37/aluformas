<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div class="normal">
			<table width="100%" border="0">
				<tr>
					<td width="33%">
						<table border="0">
							<tr>
							</tr>
						</table>
					</td>
					<td align="center" width="33%">
						<h1>ROLES</h1>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="usuario_nuevo.php">
							<a href="javascript:document.formNuevo.submit();">
							Nuevo>>>>
							</a>
						</form>
					</td>
				</tr>
			</table>
		</div>
		<center>
			<div class="listado">
				<table>
					<thead>
						<tr>
							<th>NRO</th><th>USUARIO</th><th>ROL</th>
							<th align="center"><img src="../../img/modificar.gif" height="30px"></th><th align="center"><img src="../../img/borrar.gif" height="30px"></th>
						</tr>
					</thead>
					{assign var="b" value="1"}
					{foreach item=r from=$roles}
					<tr>
						<td align="center">{$b}</td>
						<td>{$r.usuario1}</td>
						<td>{$r.rol}</td>
						<td align="center">
							<form name="formModif{$r.id_rol}" method="post" action="rol_modificar.php">
							<input type="hidden" name="id_rol" value="{$r.id_rol}">
							<input type="hidden" name="id_rol" value="{$r.id_rol}">
							<a href="javascript:document.formModif{$r.id_rol}.submit();" title="Modificar Roles Sistema">
								Modificar>>>
							</a>
							</form>
						</td>
						<td align="center">
							<form name="formElimi{$r.id_rol}" method="post" action="rol_eliminar.php">
							<input type="hidden" name="id_rol" value="{$r.id_rol}">
							<a href="javascript:document.formElimi{$r.id_rol}.submit();" title="Eliminar Rol Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar el Rol :::{$r.rol}?"));'>
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
