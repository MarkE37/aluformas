<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "color");

paginacion("color.php?", $smarty);

$sql3 = $db->Prepare("	SELECT *
					FROM color
					WHERE id_color > 1
					ORDER BY id_color DESC
					LIMIT ? OFFSET ?");


/*$sql3 = $db->Prepare("SELECT *
					  FROM color
					  WHERE estado <> '0'
					  AND id_color >= 1
					  ORDER BY id_color DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("color", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("color", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("color.tpl");

?>
