<?php
session_start();

require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__tipo_vidrio = $_POST["tipo_vidrio"];
$__color = $_POST["color"];
$__ancho = $_POST["ancho"];
$__alto = $_POST["alto"];
$smarty = new Smarty;

	$reg = array();
	$reg["id_vidrieria"] = 1;
	$reg["id_tipo_vidrio"] = $__tipo_vidrio;
	$reg["id_color"] = $__color;
	$reg["ancho"] = $__ancho;
	$reg["alto"] = $__alto;
	$reg["fec_insercion"] = date("Y-m-d H:i:s");
	$reg["estado"] = '1';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("vidrios",$reg, "INSERT");

if ($rs1){
	header("Location: vidrios.php");
	exit();
} else{
	$smarty->assign("mensaje","ERROR: Los datos no se insertaron !!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("vidrio_nuevo1.tpl");
}
?>
