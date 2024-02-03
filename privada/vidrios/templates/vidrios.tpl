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
						<h2>VIDRIOS</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="vidrio_nuevo.php">
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
						<th>NRO</th><th>Nombre</th><th>Color</th><th>Ancho</th><th>Alto</th>
						<th align="center"><img src="../../img/modificar.gif" height="30px"></th><th align="center"><img src="../../img/borrar.gif" height="30px"></th>
					</tr>
				</thead>
				{assign var="b" value=1}
	               {foreach item=r from=$vidrios}
				<tr>
                    	<td>{$b}</td>
					<td>{$r.nombre_vidrio}</td>
					<td>{$r.Color}</td>
					<td>{$r.ancho}</td>
					<td>{$r.alto}</td>
                    	<td>
						<form name="formModif{$r.id_vidrio}" method="post" action="vidrio_modificar.php">
						<input type="hidden" name="id_vidrio" value="{$r.id_vidrio}">
						<input type="hidden" name="id_color" value="{$r.id_color}">
						<input type="hidden" name="id_tipo_vidrio" value="{$r.id_tipo_vidrio}">
						<a href="javascript:document.formModif{$r.id_vidrio}.submit();" title="Modificar vidrio Sistema">
							Modificar>>>
						</a>
						</form>
					</td>
					<td>
						<form name="formElimi{$r.id_vidrio}" method="post" action="vidrio_eliminar.php">
						<input type="hidden" name="id_vidrio" value="{$r.id_vidrio}">
						<a href="javascript:document.formElimi{$r.id_vidrio}.submit();" title="Eliminar vidrio Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar al vidrio..?"));'>
							Eliminar>>>
						</a>
						</form>
					</td>
					{assign var="b" value=$b+1}
					{/foreach}
				</tr>
			</table>
			</div>
		</center>
	</body>
</html>
