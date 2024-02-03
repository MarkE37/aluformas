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
						<h2>vidrierias</h2>
					</td>
					<td align="left" width="33%">
					</td>
				</tr>
			</table>
		</div>
		<div class="listado">
		<center>
			<table>
				<thead>
					<tr>
						<th>NRO</th><th>nombre</th><th>telefono</th><th>direccion</th>
						<th align="center"><img src="../../img/modificar.gif" height="30px"></th>
					</tr>
				</thead>
				{assign var="b" value="1"}
				{foreach item=r from=$vidrieria}
				<tr>
                    <td>{$b}</td>
					<td>{$r.nombre}</td>
					<td>{$r.telefono}</td>
					<td>{$r.direccion}</td>
                    <td>
						<form name="formModif{$r.id_vidrieria}" method="post" action="vidrieria_modificar.php">
						<input type="hidden" name="id_vidrieria" value="{$r.id_vidrieria}">
						<a href="javascript:document.formModif{$r.id_vidrieria}.submit();" title="Modificar vidrieria Sistema">
							Modificar>>>
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
