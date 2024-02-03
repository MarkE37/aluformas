<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$sql = $db->Prepare("	SELECT *
					FROM tipo_vidrio tp
					WHERE tp.estado <> '0'
					ORDER BY tp.id_tipo_vidrio DESC
					 ");
$rs = $db->GetAll($sql);

$sql2 = $db->Prepare("	SELECT *
					FROM color col
					WHERE col.estado <> '0'
					ORDER BY col.id_color DESC
					 ");
$rs2 = $db->GetAll($sql2);


$smarty = new Smarty;
$smarty->assign("tipo_vidrios", $rs);
$smarty->assign("colores", $rs2);
$smarty->assign("direc_css", $direc_css);
$smarty->display("vidrio_nuevo.tpl");
?>
