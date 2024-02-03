<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
		function buscar(){
			var d1, contenedor, url;
			contenedor = document.getElementById('proveedores1');
			d1 = document.formu1.nombres.value;
			d2 = document.formu1.telefono.value;
			d3 = document.formu1.direccion.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_proveedores.php";
			param = "nombres="+d1+"&telefono="+d2+"&direccion="+d3;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4) {
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}
	</script>
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
						<h2>PROVEEDORES</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="proveedor_nuevo.php">
							<a href="javascript:document.formNuevo.submit();">
							Nuevo>>>>
							</a>
						</form>
					</td>
				</tr>
			</table>
			<center>
				<form action="#" method="post" name="formu1">
					<table width="50%">
						<tr>
							<th>
								<b>Nombres</b>
								<input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
							</th>
							<th>
								<b>telefono</b>
								<input type="text" name="telefono" value="" size="10" onkeyup="buscar()">
							</th>
							<th>
								<b>direccion</b>
								<input type="text" name="direccion" value="" size="10" onkeyup="buscar()">
							</th>
						</tr>
					</table>
				</form>
			</center>
		</div>
		<div class="listado" id="proveedores1">
		<center>
			<table>
				<thead>
					<tr>
						<th>NRO</th><th>nombre</th><th>telefono</th><th>direccion</th>
						<th align="center"><img src="../../img/modificar.gif" height="30px"></th><th align="center"><img src="../../img/borrar.gif" height="30px"></th>
					</tr>
				</thead>
				{assign var="b" value=0}
	               {assign var="total" value=$pagina-1}
	               {assign var="a" value=$numreg*$total}
	               {assign var="b" value=$b+1+$a}
	               {foreach item=r from=$proveedores}
				<tr>
                    	<td>{$b}</td>
					<td>{$r.nombre}</td>
					<td>{$r.telefono}</td>
					<td>{$r.direccion}</td>
                    <td>
						<form name="formModif{$r.id_proveedor}" method="post" action="proveedor_modificar.php">
						<input type="hidden" name="id_proveedor" value="{$r.id_proveedor}">
						<a href="javascript:document.formModif{$r.id_proveedor}.submit();" title="Modificar proveedor Sistema">
							Modificar>>>
						</a>
						</form>
					</td>
					<td>
						<form name="formElimi{$r.id_proveedor}" method="post" action="proveedor_eliminar.php">
						<input type="hidden" name="id_proveedor" value="{$r.id_proveedor}">
						<a href="javascript:document.formElimi{$r.id_proveedor}.submit();" title="Eliminar proveedor Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar al proveedor..?"));'>
							Eliminar>>>
						</a>
						</form>
					</td>
					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
			</table>
			<div class="normal">
				<table>
					<tr align="center">
	                        <td>
	                            {if !empty($urlback)}
	                            <a onclick="location.href='{$urlback}'" style="font-family: Verdana; font-size: 14px; cursor:pointer;">&laquo;Anterior</a>
	                            {/if}
	                            {if !empty($paginas)}
	                                {foreach from=$paginas item=pag}
	                                    {if $pag.npag == $pagina}
	                                    {if $pagina neq '1'} |{/if}
	                                    <b style="color:#fb992f; font-size:16px;"> {$pag.npag}</b>
	                                    {else}
	                                    <a onclick="location.href='{$pag.pagV}'" style="cursor:pointer;"> {$pag.npag}</a>
	                                    {/if}
	                                {/foreach}
	                            {/if}
	                            {if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
	                            <a onclick="location.href='{$urlnext}'" style="font-family: Verdana; font-size:14px; cursor:pointer;">Siguiente&laquo; </a>
	                            {/if}
	                        </td>
	                    </tr>
				</table>
			</div>
			</div>
		</center>
	</body>
</html>
