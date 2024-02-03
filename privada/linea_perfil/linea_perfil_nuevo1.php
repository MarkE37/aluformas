<?php
session_start();

require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__linea = $_POST["linea"];

$smarty = new Smarty;

	$reg = array();
	$reg["linea"] = $__linea;
	$reg["fec_insercion"] = date("Y-m-d H:i:s");
	$reg["estado"] = '1';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("linea_perfil",$reg, "INSERT");

if ($rs1){
	header("Location: linea_perfil.php");
	exit();
} else{
	$smarty->assign("mensaje","ERROR: Los datos no se insertaron !!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("linea_perfil_nuevo1.tpl");
}
?>
