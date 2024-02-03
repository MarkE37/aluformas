<?php
/* Smarty version 3.1.29, created on 2021-07-01 21:20:31
  from "D:\disenoWeb\www\sis_aluformas\privada\propietarios\templates\propietarios_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60de69dfdea8b4_01018568',
  'file_dependency' => 
  array (
    'b227aeff00da8343283fc708c4b6c983b8ac4e13' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\propietarios\\templates\\propietarios_nuevo.tpl',
      1 => 1596396461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60de69dfdea8b4_01018568 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
		<?php echo '<script'; ?>
 type="text/javascript" src="js/expresiones_regulares.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_propietario.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR PROPIETARIO</h2>
			<form action="propietarios_nuevo1.php" method="post" name="formu">
				<table>
                    <tr>
                        <th align="left">Nombres(*)</th>
                        <th>:</th>
                        <td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
                    </tr>
					<tr>
						<th align="left">CI(*)</th>
						<th>:</th>
						<td><input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='propietarios.php';">
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
<?php }
}
