<?php
session_start();

require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__nombre = $_POST["nombre"];

$smarty = new Smarty;

	$reg = array();
	$reg["nombre"] = $__nombre;
	$reg["fec_insercion"] = date("Y-m-d H:i:s");
	$reg["estado"] = '1';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("tipo_perfil",$reg, "INSERT");

if ($rs1){
	header("Location: tipo_perfil.php");
	exit();
} else{
	$smarty->assign("mensaje","ERROR: Los datos no se insertaron !!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("tipo_perfil_nuevo1.tpl");
}
?>
