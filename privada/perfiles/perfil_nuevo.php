<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$sql = $db->Prepare("	SELECT *
					FROM tipo_perfil tp
					WHERE tp.estado <> '0'
					ORDER BY tp.id_tipo_perfil DESC
					 ");
$rs = $db->GetAll($sql);

$sql2 = $db->Prepare("	SELECT *
					FROM color col
					WHERE col.estado <> '0'
					ORDER BY col.id_color DESC
					 ");
$rs2 = $db->GetAll($sql2);

$sql3 = $db->Prepare("	SELECT *
					FROM linea_perfil lp
					WHERE lp.estado <> '0'
					ORDER BY lp.id_linea_perfil DESC
					 ");
$rs3 = $db->GetAll($sql3);

$smarty = new Smarty;
$smarty->assign("tipo_perfil", $rs);
$smarty->assign("colores", $rs2);
$smarty->assign("linea_perfil", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("perfil_nuevo.tpl");
?>
