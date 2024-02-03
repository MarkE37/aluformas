<?php
session_start();

require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__tipo_perfil = $_POST["id_tipo_perfil"];
$__color = $_POST["id_color"];
$__linea_perfil = $_POST["id_linea"];
$__largo = $_POST["largo"];
$__precio = $_POST["precio"];
$smarty = new Smarty;

	$reg = array();
	$reg["id_vidrieria"] = 1;
	$reg["id_tipo_perfil"] = $__tipo_perfil;
	$reg["id_color"] = $__color;
	$reg["id_linea_perfil"] = $__linea_perfil;
	$reg["largo"] = $__largo;
	$reg["precio_perfil"] = $__precio;
	$reg["fec_insercion"] = date("Y-m-d H:i:s");
	$reg["estado"] = '1';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("perfiles",$reg, "INSERT");

	
if ($rs1){
	header("Location: perfiles.php");
	exit();
} else{
	$smarty->assign("mensaje","ERROR: Los datos no se insertaron !!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("perfil_nuevo1.tpl");
}
?>
