<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_usuario.js"></script>
		<script type="text/javascript" src="../../ajax.js"></script>
		<script type="text/javascript">
     		function buscar(){
     			var d1, contenedor, url;
     			contenedor = document.getElementById('personas');
                    contenedor2 = document.getElementById('persona_seleccionado');
                    contenedor3 = document.getElementById('persona_insertado');
     			d1 = document.formu.ap.value;
     			d2 = document.formu.am.value;
     			d3 = document.formu.nombres.value;
     			d4 = document.formu.ci.value;
     			ajax = nuevoAjax();
     			url = "ajax_buscar_personas.php";
     			param = "ap="+d1+"&am="+d2+"&nombres="+d3+"&ci="+d4;
     			ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
     					contenedor.innerHTML = ajax.responseText;
                              contenedor2.innerHTML = "";
                              contenedor3.innerHTML = "";
     				}
     			}
     			ajax.send(param);
     		}

               function buscar_persona(id_persona){
				var d1, contenedor, url;
				contenedor = document.getElementById('persona_seleccionado');
                    contenedor2 = document.getElementById('personas');
				document.formu.id_persona.value = id_persona;

				d1 = id_persona;

				ajax = nuevoAjax();
     			url = "ajax_buscar_personas1.php";
				param = "id_persona="+d1;
				ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
     					contenedor.innerHTML = ajax.responseText;
                              contenedor2.innerHTML = "";
     				}
     			}
     			ajax.send(param);
			}

			function insertar_persona(){
				var d1, contenedor, url;
     			contenedor = document.getElementById('persona_seleccionado');
                    contenedor2 = document.getElementById('personas');
                    contenedor3 = document.getElementById('persona_insertada');
     			d1 = document.formu.ap1.value;
     			d2 = document.formu.am1.value;
     			d3 = document.formu.nombres1.value;
     			d4 = document.formu.ci1.value;
     			d5 = document.formu.direccion1.value;
     			d6 = document.formu.telefono1.value;
				f = document.formu.genero1[0].checked;
				m = document.formu.genero1[1].checked;
				if (f == true)
					d7 = "f";
				else if (m == true)
					d7 = "m";
				else
					d7 = "";
				if (d4 == "") {
					alert("El ci es incorrecto o el campo esta vacio");
					document.formu.ci1.focus();
					return;
				}
				if ((d1 == "") && (d2 == "")) {
					alert("Por favor ingrese un apellido");
					document.formu.ap1.focus();
					return;
				}
				if (d3 == "") {
					alert("El nombre es incorrecto o el campo esta vacio");
					document.formu.nombre1.focus();
					return;
				}
				if (d5 == "") {
					alert("ingrese direccion");
					return;
				}
				ajax = nuevoAjax();
     			url = "ajax_inserta_persona.php";
				param = "ap1="+d1+"&am1="+d2+"&nombres1="+d3+"&ci1="+d4+"&direccion1="+d5+"&telefono1="+d6+"&genero1="+d7;
				ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
						contenedor.innerHTML = "";
                              contenedor2.innerHTML = "";
                              contenedor3.innerHTML = ajax.responseText;
     				}
     			}
     			ajax.send(param);
				buscar();
			}
     	</script>
	</head>
	<body>
		<center>
			<br><br><br><br>
			<h2>REGISTRAR USUARIO</h2>
			<form action="usuario_nuevo1.php" method="post" name="formu">
				<table>
					<tr>
						<td>
							<fieldset border="2">
								<legend>Seleccione persona</legend>
								<table width = "100%">
									<tr>
										<td>
											<table align = "center">
												<tr>
													<td width = "50%">
														<input type="text" name="ap" value="" size="15" onKeyup="buscar()" placeholder="ap. Paterno">
													</td>
													<td width = "50%">
														<input type="text" name="am" value="" size="15" onkeyup="buscar()" placeholder="ap. Materno">
													</td>
												</tr>
												<tr>
													<td>
														<input type="text" name="nombres" value="" size="15" onkeyup="buscar()" placeholder="Nombres">
													</td>
													<td>
														<input type="text" name="ci" value="" size="15" onkeyup="buscar()" placeholder="Cedula de identidad">
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table width="100%">
												<tr>
													<td colspan="3">
														<div id="personas" class="listado"></div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table width="100%">
												<tr>
													<td colspan="3">
														<div id="persona_seleccionado"></div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table width="100%">
												<tr>
													<td colspan="3">
														<input type="hidden" name="id_persona">
														<div id="persona_insertada" class="listado"></div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
					<tr>
						<td>
							<table align=center>
								<tr>
									<td align="center" colspan="3">
										<table>
											<tr>
												<th><input type="text" name="usuario1" placeholder="Usuario">(*)</th>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td align="center" colspan="3">
										<table>
											<tr>
												<th><input type="password" name="clave" placeholder="clave">(*)</th>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td align="center" colspan="3">
										<input type="hidden" name="accion" value="">
										<input type="button" value="Aceptar" onclick="validar();">
										<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';">
									</td>
								</tr>
								<tr>
									<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
