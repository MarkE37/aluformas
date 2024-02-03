<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql6 = $db->Prepare("   SELECT *
                         FROM propietarios
                         WHERE estado <> '0'
                         ORDER BY propietarios.fec_insercion DESC
				  ");
$rs6 = $db->GetAll($sql6);

$smarty->assign("propietarios", $rs6);
$smarty->assign("direc_css", $direc_css);
$smarty->display("propietarios.tpl");
?>
